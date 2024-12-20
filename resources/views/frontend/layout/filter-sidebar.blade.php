<style type="text/css">
    .accordion-button{
       font-size: 16px !important;
    }
 </style>
 <div class="sidebar">
    <div class="sidebar-item sidebar-categories no-bg ">
        <!-- <div class="sidebar-title">Type of property</div>  -->
        <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item nomeSd">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button mgt65sss" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Type of property
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <form class="form-search mrgButon">
                <div class="input-search relative">
                    <fieldset class="name">
                        <input type="text" placeholder="Search" class="border-radius-corner formRaidu search_categories" name="name" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <div class="button-submit style-absolute-right-center">
                        <button class="style-icon-default" type="submit"><i class="flaticon-magnifiying-glass"></i></button>
                    </div>
                </div>
            </form>
            @if(!empty($categoriesExceptHomeInteriors))
            <div class="">
                <ul class="grid-checkbox nonsss categories-wrapper">
                @foreach($categoriesExceptHomeInteriors as $categor)
                <li class="checkbox-item">
                    <label>
                        <p>{{ $categor->name}}</p>
                        <input type="checkbox" name="categories_filter[]" value="{{ $categor->id}}" {{ (isset($filterData['category_id']) && $filterData['category_id'] == $categor->id) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                @endforeach
                </ul>
            </div>
            @endif
            </div>
        </div>
        @if(!empty($citiesList))
        <div class="accordion-item nomeSd">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed mgt65sss" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Localities
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
            <form class="form-search mrgButon">
                <div class="input-search relative">
                    <fieldset class="name">
                        <input type="text" placeholder="Search" class="border-radius-corner formRaidu search_cities" name="name" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <div class="button-submit style-absolute-right-center">
                        <button class="style-icon-default" type="submit"><i class="flaticon-magnifiying-glass"></i></button>
                    </div>
                </div>
            </form>
            <ul class="grid-checkbox nonsss cities-wrapper">
                @foreach($citiesList as $cities)
                <li class="checkbox-item">
                    <label>
                        <p>{{ $cities->name }}</p>
                        <input type="checkbox" name="cities_filter[]" value="{{ $cities->id }}" {{ (isset($filterData['city_id']) && $filterData['city_id'] == $cities->id) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                @endforeach
            </ul>
            </div>
        </div>
        @endif
        @if(!empty($projectsList))
        <div class="accordion-item nomeSd">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed mgt65sss" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                New Projects / Socities
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <form class="form-search mrgButon">
                <div class="input-search relative">
                    <fieldset class="name">
                        <input type="text" placeholder="Search" class="border-radius-corner formRaidu search_projects" name="name" tabindex="2" value="" aria-required="true" required="">
                    </fieldset>
                    <div class="button-submit style-absolute-right-center">
                        <button class="style-icon-default" type="submit"><i class="flaticon-magnifiying-glass"></i></button>
                    </div>
                </div>
            </form>
            <ul class="grid-checkbox nonsss projects-wrapper">
                @foreach($projectsList as $project)
                    <li class="checkbox-item">
                        <label>
                            <p>{{ $project->name}}</p>
                            <input type="checkbox" name="project_filter[]"  value="{{ $project->id}}">
                            <span class="btn-checkbox bChe"></span>
                        </label>
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
        @endif
        <div class="accordion-item nomeSd">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed mgt65sss" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFhree" aria-expanded="false" aria-controls="panelsStayOpen-collapseFhree">
            No. of Bedrooms
            </button>
            </h2>
            <div id="panelsStayOpen-collapseFhree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFhree">

            <ul class="grid-checkbox nonsss">
                <li class="checkbox-item">
                    <label>
                        <p>1 RK/1 BHK</p>
                        <input type="checkbox" name="number_of_bedrooms[]" value="1" {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 1) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>2 BHK</p>
                        <input type="checkbox" name="number_of_bedrooms[]" value="2"  {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 2) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>3 BHK</p>
                        <input type="checkbox" name="number_of_bedrooms[]" value="3"  {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 3) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>4 BHK</p>
                        <input type="checkbox" name="number_of_bedrooms[]" value="4"  {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 4) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>5 BHK</p>
                        <input type="checkbox" name="number_of_bedrooms[]" value="5"  {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 5) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>6 BHK</p>
                        <input type="checkbox" name="number_of_bedrooms[]" value="6"  {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 6) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>6+ BHK</p>
                        <input type="checkbox" name="number_of_bedrooms[]" value="more_than_6"  {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] > 6) ? 'checked' : ''}}>
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
            </ul>
            </div>
        </div>

        <div class="accordion-item nomeSd">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed mgt65sss" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsesshree" aria-expanded="false" aria-controls="panelsStayOpen-collapsesshree">
            Age of Property
            </button>
            </h2>
            <div id="panelsStayOpen-collapsesshree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-collapsesshree">

            <ul class="grid-checkbox nonsss">
                <li class="checkbox-item">
                    <label>
                        <p>Less than 5 years</p>
                        <input type="checkbox" name="property_age[]" value="less_than_5">
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>5-10 years old</p>
                        <input type="checkbox" name="property_age[]" value="5_to_10">
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>10-15 years old</p>
                        <input type="checkbox" name="property_age[]" value="10_to_15">
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>15-20 years old</p>
                        <input type="checkbox" name="property_age[]" value="15_to_20">
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
                <li class="checkbox-item">
                    <label>
                        <p>20+ years old</p>
                        <input type="checkbox" name="property_age[]" value="more_than_20">
                        <span class="btn-checkbox bChe"></span>
                    </label>
                </li>
            </ul>
            </div>
        </div>
    </div>
 </div>

    {{-- <div class="sidebar-item sidebar-categories no-bg form-search mrgButon">
    <div class="sidebar-title">Search</div>

            <div class="input-search relative">
                <fieldset class="name">
                    <input type="text" placeholder=" Locality / Project / Society / Landmark" class="border-radius-corner formRaidu" name="name" tabindex="2" value="" aria-required="true" required="">
                </fieldset>
                <div class="button-submit style-absolute-right-center">
                    <button class="style-icon-default" type="bjtton"><i class="flaticon-magnifiying-glass"></i></button>
                </div>
            </div>

    </div> --}}
    <div class="sidebar-item sidebar-categories no-bg" style="padding: 0;">
    <div class="group-form form-search-home5 button-submit">
        <div class="button-submit">
            <button class="apply_filter_from_sidebar" type="button"> <i class="flaticon-filter"></i>Apply Filter</button>
        </div>
    </div>
    </div>
    @if(!empty($exclusiveProperties))
    <div class="sidebar-item sidebar-exclusive no-bg relative">
    <div class="sidebar-title">Exclusive Property</div>
    <div class="top-wrap arrow-style-2">
        <div class="swiper-button-prev exclusive-prev"></div>
        <div class="swiper-button-next exclusive-next"></div>
    </div>
    <div class="swiper-container slider-exclusive">
        <div class="swiper-wrapper">
        @foreach ($exclusiveProperties as $exclusive)
            <div class="swiper-slide">
                <div class="box-dream style-absolute type-no-bg-content style-properties-1 item-1">
                <div class="image">
                    <div class="list-tags">
                    @if($exclusive->type == 'sale')
                        <a href="#" class="tags-item for-sell">SALE</a>
                    @else
                        <a href="#" class="tags-item for-sell">RENT</a>
                    @endif
                    @if($exclusive->is_featured == 1)
                        <a href="#" class="tags-item featured">Featured</a>
                    @endif
                    </div>
                    @if(isset($exclusive->images[0]))
                        <img class="w-full" src="{{asset('/storage').'/'.$exclusive->images[0] }}" alt="">
                    @else
                        <img src="{{ asset('/').'frontend/images/sidebar/img-1.jpg'}} " alt="groundfloor-livingroom">
                    @endif
                </div>
                <div class="content">
                    @if($exclusive->type == 'rent')
                        <div class="price">₹ {{ number_format($exclusive->price,2) }}  / {{ $exclusive->period }}</div>
                    @else
                        <div class="price">₹ {{ number_format($exclusive->price,2) }}</div>
                    @endif
                    <div class="head">
                        <div class="title">
                            <a href="{{ url('/get-detail-property').'/'.$exclusive->id }}">{{ $exclusive->name }}</a>
                        </div>
                    </div>
                    <div class="location">
                        <div class="icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <p>{{ $exclusive->location }}</p>
                    </div>
                    <div class="icon-box">
                        <div class="item">
                            <i class="flaticon-hotel"></i>
                            <p>{{ $exclusive->number_bedroom }}</p>
                        </div>
                        <div class="item">
                            <i class="flaticon-bath-tub"></i>
                            <p>{{ $exclusive->number_bathroom }}</p>
                        </div>
                        <div class="item">
                            <i class="flaticon-minus-front"></i>
                            <p>{{ $exclusive->square }}</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    </div>
    @endif
</div>
