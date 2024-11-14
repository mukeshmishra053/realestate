<?php

namespace Botble\RealEstate\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Contracts\HasTreeCategory as HasTreeCategoryContract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Facades\BaseHelper;
use Botble\Base\Models\BaseModel;
use Botble\Base\Traits\HasTreeCategory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\HtmlString;

class ProjectCategories extends BaseModel implements HasTreeCategoryContract
{
    use HasTreeCategory;

    protected $table = 're_project_categories';

    protected $fillable = [
        'project_id',
        'category_id'
    ];


}
