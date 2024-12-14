<?php

namespace Botble\Base\Http\Controllers;

use Botble\Base\Enums\SystemUpdaterStepEnum;
use Botble\Base\Events\UpdatedEvent;
use Botble\Base\Events\UpdatingEvent;
use Botble\Base\Facades\Assets;
use Botble\Base\Facades\BaseHelper;
use Botble\Base\Services\CleanDatabaseService;
use Botble\Base\Supports\Core;
use Botble\Base\Supports\MembershipAuthorization;
use Botble\Base\Supports\SystemManagement;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class EnquiryController extends BaseSystemController
{
    public function getIndex(): View
    {
        $this->pageTitle('Enquiry');

        return view('core/base::enquiries.index');
    }

    public function postAuthorize(MembershipAuthorization $authorization)
    {
        $authorization->authorize();

        return $this->httpResponse();
    }

    public function getMenuItemsCount()
    {
        $data = apply_filters(BASE_FILTER_MENU_ITEMS_COUNT, []);

        return $this
            ->httpResponse()
            ->setData($data);
    }

    public function getCheckUpdate(Core $core)
    {
        $response = $this->httpResponse();

        if (! config('core.base.general.enable_system_updater') || BaseHelper::hasDemoModeEnabled()) {
            return $response;
        }

        $response
            ->setData(['has_new_version' => false]);

        $updateData = $core->checkUpdate();

        if ($updateData) {
            $response
                ->setData(['has_new_version' => true])
                ->setMessage(
                    sprintf(
                        'A new version (%s / released on %s) is available to update',
                        $updateData->version,
                        BaseHelper::formatDate($updateData->releasedDate)
                    )
                );
        }

        return $response;
    }


    public function getCleanup(
        Request $request,
        CleanDatabaseService $cleanDatabaseService
    ) {
        $this->pageTitle(trans('core/base::system.cleanup.title'));

        Assets::addScriptsDirectly('vendor/core/core/base/js/cleanup.js');

        try {
            $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
        } catch (Throwable) {
            $tables = [];
        }

        $disabledTables = [
            'disabled' => $cleanDatabaseService->getIgnoreTables(),
            'checked' => [],
        ];

        if ($request->isMethod('POST')) {
            if (! config('core.base.general.enabled_cleanup_database', false)) {
                return $this
                    ->httpResponse()
                    ->setCode(401)
                    ->setError()
                    ->setMessage(strip_tags(trans('core/base::system.cleanup.not_enabled_yet')));
            }

            $request->validate(['tables' => 'array']);

            $cleanDatabaseService->execute($request->input('tables', []));

            return $this
                ->httpResponse()
                ->setMessage(trans('core/base::system.cleanup.success_message'));
        }

        return view('core/base::system.cleanup', compact('tables', 'disabledTables'));
    }

    /**
     * @deprecated Will be removed in the future, use postUpdaterByStepName instead.
     */
    protected function postUpdaterByStep(Core $core, Request $request)
    {
        $updateId = $request->input('update_id');
        $version = $request->input('version');

        try {
            switch ($request->integer('step', 1)) {
                case 1:
                    event(new UpdatingEvent());

                    $core->downloadUpdate($updateId, $version);

                    return $this
                        ->httpResponse()
                        ->setMessage(
                            __('Could not download updated file. Please check your license or your internet network.')
                        )
                        ->setError()
                        ->setCode(422);

                case 2:
                    $core->updateFilesAndDatabase($version);

                    return $this
                        ->httpResponse()
                        ->setMessage(__('Could not update files & database.'))
                        ->setError()
                        ->setCode(422);
                case 3:
                    $core->publishUpdateAssets();

                    return $this
                        ->httpResponse()
                        ->setMessage(__('Your asset files have been published successfully.'));
                case 4:
                    $core->cleanCaches();

                    event(new UpdatedEvent());

                    return $this
                        ->httpResponse()
                        ->setMessage(__('Your system has been cleaned up successfully.'));
                default:
                    throw new Exception(__('Invalid step.'));
            }
        } catch (Throwable $exception) {
            $core->logError($exception);

            return $this
                ->httpResponse()
                ->setMessage($exception->getMessage())
                ->setError()
                ->setCode(422);
        }
    }

    protected function postUpdaterByStepName(Core $core, Request $request)
    {
        $updateId = $request->input('update_id');
        $version = $request->input('version');
        $stepName = $request->input('step_name');
        $step = SystemUpdaterStepEnum::tryFrom($stepName);

        if (! $step) {
            return $this
                ->httpResponse()
                ->setMessage(__('Invalid step.'))
                ->setError()
                ->setCode(422);
        }

        try {
            match ($step->getValue()) {
                SystemUpdaterStepEnum::DOWNLOAD => $core->downloadUpdate($updateId, $version),
                SystemUpdaterStepEnum::UPDATE_FILES => $core->updateFiles($version),
                SystemUpdaterStepEnum::UPDATE_DATABASE => $core->updateDatabase(),
                SystemUpdaterStepEnum::PUBLISH_CORE_ASSETS => $core->publishCoreAssets(),
                SystemUpdaterStepEnum::PUBLISH_PACKAGES_ASSETS => $core->publishPackagesAssets(),
                SystemUpdaterStepEnum::CLEAN_UP => $core->cleanUp(),
                default => throw new Exception(__('Invalid step.')),
            };

            return $this
                ->httpResponse()
                ->setData([
                    'next_step' => $step->nextStep(),
                    'next_message' => $step->nextStepMessage(),
                    'current_percent' => $step->currentPercent(),
                ])
                ->setMessage($step->successMessage());
        } catch (Throwable $exception) {
            $core->logError($exception);

            return $this
                ->httpResponse()
                ->setMessage($exception->getMessage())
                ->setError()
                ->setCode(422);
        }
    }
}
