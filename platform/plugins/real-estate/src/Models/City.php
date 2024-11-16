<?php

namespace Botble\RealEstate\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Facades\BaseHelper;
use Botble\Base\Models\BaseModel;
use Botble\Base\Traits\HasTreeCategory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\HtmlString;
/**
 * @method static \Botble\RealEstate\QueryBuilders\PropertyBuilder<static> query()
 */
class City extends BaseModel
{

    protected $table = 'cities';

    protected $fillable = [
        'name',
        'state_id',
        'country_id',
        'record_id',
        'order',
        'image',
        'is_default',
        'is_featured',
        'status',
        'created_at',
        'updated_at',
        'slug '
    ];

    public function properties()
    {
        return $this->hasMany(Property::class,'city_id');
    }
    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
}
