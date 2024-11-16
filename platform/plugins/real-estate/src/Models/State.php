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
class State extends BaseModel
{

    protected $table = 'states';



    public function properties()
    {
        return $this->hasMany(Property::class,'city_id');
    }
    public function cities()
    {
        return $this->hasMany(State::class,'state_id');
    }
}
