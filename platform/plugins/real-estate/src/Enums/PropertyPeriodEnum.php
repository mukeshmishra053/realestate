<?php

namespace Botble\RealEstate\Enums;

use Botble\Base\Facades\BaseHelper;
use Botble\Base\Supports\Enum;
use Illuminate\Support\HtmlString;

/**
 * @method static PropertyPeriodEnum DAY()
 * @method static PropertyPeriodEnum MONTH()
 * @method static PropertyPeriodEnum YEAR()
 */
class PropertyPeriodEnum extends Enum
{
    public const DAY = 'day';

    public const MONTH = 'month';

    public const YEAR = 'year';

    public static $langPath = 'plugins/real-estate::property.periods';

    public function toHtml(): HtmlString|string|null
    {
        $color = match ($this->value) {
            self::DAY => 'success',
            self::MONTH => 'info',
            self::YEAR => 'warning',
            default => 'primary',
        };

        return BaseHelper::renderBadge($this->label(), $color);
    }
}
