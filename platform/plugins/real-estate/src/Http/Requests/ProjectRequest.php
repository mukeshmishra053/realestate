<?php

namespace Botble\RealEstate\Http\Requests;

use Botble\RealEstate\Enums\ProjectStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class ProjectRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:120',
            'description' => 'required|nullable|string|max:400',
            'content' => 'required|string',
            'number_block' => 'required|numeric|min:0|max:100000|nullable',
            'number_floor' => 'required|numeric|min:0|max:100000|nullable',
            'number_flat' => 'required|numeric|min:0|max:100000|nullable',
            'price_from' => 'required|numeric|min:0|nullable',
            'price_to' => 'required|numeric|min:0|nullable',
            'latitude' => ['required','max:20', 'nullable', 'regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'longitude' => [
                'required',
                'max:20',
                'nullable',
                'regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/',
            ],
            'status' => Rule::in(ProjectStatusEnum::values()),
            'unique_id' => 'nullable|string|max:120|unique:re_projects,unique_id,' . $this->route('project'),
            'date_finish' => 'nullable|date',
            'date_sell' => 'nullable|date',
        ];
    }

    public function attributes(): array
    {
        return [
            'facilities.*.distance' => trans('plugins/real-estate::property.distance_key'),
            'custom_fields.*.name' => trans('plugins/real-estate::custom-fields.name'),
            'custom_fields.*.value' => trans('plugins/real-estate::custom-fields.name'),
        ];
    }
}
