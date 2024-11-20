@extends('frontend.layout.master')
@section('title','Properties')
@section('content')
<div class="main-content px-20">
    <div class="space-20"></div>
    <!-- flat-title -->
    <div class="flat-title page-property-list-2">
       <div class="cl-container">
          <div class="row">
             <div class="col-12">
                <div class="content">
                   <h2 class="wow fadeInUp">Real Estate & Homes For Sale</h2>
                   <ul class="breadcrumbs wow fadeInUp">
                      <li><a href="index.php">Home</a></li>
                      <li>/</li>
                      <li>Property List</li>
                   </ul>
                   <div class="form-filter wow fadeInUp">
                      <form class="form-search-home5">
                         <div class="list">
                            <div class="group-form form-search-content">
                               <div class="form-style-has-title">
                                  <div class="title">Keyword</div>
                                  <div class="relative">
                                     <fieldset class="name">
                                        <input type="text" placeholder="Enter Keyword" class="show-search style-default filter_property_by_search" name="name" tabindex="2" value="" aria-required="true" required="">
                                     </fieldset>
                                     <div class="style-absolute-right">
                                        <div class="style-icon-default"><i class="flaticon-magnifiying-glass"></i></div>
                                     </div>
                                     <div class="box-content-search style-1 d-none show-filter-data"> </div>
                                  </div>
                               </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                               <div class="form-style-has-title">
                                  <div class="title">Status</div>
                                  <div class="nice-select" tabindex="0">
                                     <span class="current">All Status</span>
                                     <ul class="list style-radio select_status_filter">
                                        <li data-value="sale" class="option">For Sale</li>
                                        <li data-value="rent" class="option">For Rent</li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            @if(!empty($categoriesExceptHomeInteriors))
                            <div class="divider-1"></div>
                            <div class="group-form">
                               <div class="form-style-has-title">
                                  <div class="title">Type</div>
                                  <div class="nice-select" tabindex="0">
                                     <span class="current">All Type</span>
                                     <ul class="list select_type_filter">
                                        <li data-value class="option selected">All Type</li>
                                        @foreach($categoriesExceptHomeInteriors as $category)
                                            <li data-value="{{ $category->id }}" class="option">{{ $category->name }}</li>
                                        @endforeach
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            @endif
                         </div>
                         <div class="flex gap10">
                            <div class="group-form">
                               <div class="wg-filter">
                                  <div class="tf-button-filter btn-filter"><i class="flaticon-filter"></i>Filter</div>
                                  <div class="open-filter filter-no-content" id="a1" style="z-index: 999999;">
                                     <div>
                                        <div class="grid-3-cols mb-20">
                                            @if(!empty($citiesList))
                                                <div class="nice-select" tabindex="0">
                                                <span class="current">City</span>
                                                <ul class="list">
                                                    @foreach($citiesList as $cities)
                                                        <li data-value="{{ $cities->id }}" class="option">{{ $cities->id }}</li>
                                                    @endforeach
                                                </ul>
                                                </div>
                                            @endif
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Bedrooms</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Bedrooms</li>
                                                    <li data-value="1" class="option">1 Bed</li>
                                                    <li data-value="2" class="option">2 Bed</li>
                                                    <li data-value="3" class="option">3 Bed</li>
                                                    <li data-value="4" class="option">4 Bed</li>
                                                    <li data-value="5" class="option">5 Bed</li>
                                                    <li data-value="6" class="option">7 Bed</li>
                                                </ul>
                                            </div>
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Bathrooms</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Bathrooms</li>
                                                    <li data-value="1" class="option">1 Bath</li>
                                                    <li data-value="2" class="option">2 Bath</li>
                                                    <li data-value="3" class="option">3 Bath</li>
                                                    <li data-value="4" class="option">4 Bath</li>
                                                    <li data-value="5" class="option">5 Bath</li>
                                                    <li data-value="6" class="option">6 Bath</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="grid-4-cols">
                                           <fieldset class="name">
                                              <input type="text" placeholder="Min. Area" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                           </fieldset>
                                           <fieldset class="name">
                                              <input type="text" placeholder="Max. Area" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                           </fieldset>
                                           <div class="nice-select" tabindex="0">
                                              <span class="current">Min. Price</span>
                                              <ul class="list">
                                                 <li data-value class="option selected">Min. Price</li>
                                                 <li data-value="100 ₹" class="option">100 ₹</li>
                                                 <li data-value="150 ₹" class="option">150 ₹</li>
                                              </ul>
                                           </div>
                                           <div class="nice-select" tabindex="0">
                                              <span class="current">Max. Price</span>
                                              <ul class="list">
                                                 <li data-value class="option selected">Max. Price</li>
                                                 <li data-value="1000 ₹" class="option">1000 ₹</li>
                                                 <li data-value="1500 ₹" class="option">1500 ₹</li>
                                              </ul>
                                           </div>
                                        </div>
                                     </div>
                                     @if(!empty($amenities))
                                     <div>
                                        <div class="title">Amenities</div>
                                        <ul class="grid-checkbox">
                                            @foreach($amenities as $amenity)
                                            <li class="checkbox-item">
                                                <label>
                                                    <p>{{ $amenity->name }}</p>
                                                    <input type="checkbox" value="{{ $amenity->id }}">
                                                    <span class="btn-checkbox"></span>
                                                </label>
                                            </li>
                                           @endforeach
                                        </ul>
                                     </div>
                                     @endif
                                  </div>
                               </div>
                            </div>
                            <div class="group-form">
                               <div class="button-submit">
                                  <button class="" type="submit">Search</button>
                               </div>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- /flat-title -->
    <!-- property-grid -->
    <div class="property-list-wrap-v2">
       <div class="cl-container">
          <div class="row">
             <div class="col-lg-4">
                @include('frontend.layout.filter-sidebar')
             </div>
             <div class="col-lg-8">
                <div class="top">
                   <div class="sub">
                      <p class="wow fadeInUp total_result_found"></p>
                      <div class="sort-wrap wow fadeInUp" data-wow-delay="0.1s">
                         <p>Sort by</p>
                         <div class="nice-select default" tabindex="0">
                            <span class="current">Newest listings</span>
                            <ul class="list select_order_filter">
                               <li data-value="DESC" class="option">Newest</li>
                               <li data-value="ASC" class="option">Oldest</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="show-filter-data"><div>
             </div>
          </div>

          <div class="pagination-wrapper"></div>

       </div>
    </div>
    <!-- /property-grid -->
 </div>
@section('page_scripts')
<script>
    var formData = new FormData();
    let debounceTimer;
    $(function(){
        const params = new URLSearchParams(window.location.search);
        const category_id = params.get('category_id');
        const type = params.get('type');
        const price_range = params.get('price_range');
        formData.append('order','DESC');
        if(category_id){
            formData.append('category_id',category_id);
        }else{
            formData.delete('category_id');
        }
        if(type){
            formData.append('type',type);
        }else{
            formData.delete('type');
        }
        if(price_range){
            formData.append('price_range',price_range);
        }else{
            formData.delete('price_range');
        }
        filterProperties(1,'POST');
    });
    $("body").on('click','.select_status_filter li',function(e){
            const status_value = $(this).data('value');
            formData.append('type',status_value);
            filterProperties(1,"POST");
    });
    $("body").on('click','.select_order_filter li',function(e){
            const order = $(this).data('value');
            formData.append('order',order);
            filterProperties(1,"POST");
    });
    $("body").on('click','.select_type_filter li',function(e){
        const type_value = $(this).data('value');
        formData.append('category_id',type_value);
        filterProperties(1,"POST");
    });
    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        const page = $(this).html();
        filterProperties(page,"POST");
    });
    function filterProperties(page = 1,method){
        const url = "{{ route('filter.property.by.options') }}"+'?page='+page;
        CommonLib.ajaxForm(formData,'POST',url).then(d=>{
            $(".show-filter-data").empty();
            $(".pagination-wrapper").empty();
            $(".pagination-wrapper").empty();
            $(".total_result_found").empty();
            if(d.status === 200){
                $(".show-filter-data").removeClass('d-none');
                $(".show-filter-data").html(d.html);
                $(".total_result_found").html(`${d.total_result_found} result found`);
                if (d.pagination_html) {
                    $(".pagination-wrapper").html(d.pagination_html);
                }
            }
        }).catch(e=>{
            CommonLib.notification.error(e.responseJSON.errors);
        });
    }
    $("body").on('keyup','.search_cities',function(e){
        e.preventDefault();
        const url = "{{ route('search.cities') }}";
        const method = "GET";
        const search_term = $(this).val();
        searchDataForFilter(url,method,search_term,'.cities-wrapper');
    });
    $("body").on('keyup','.search_categories',function(e){
        e.preventDefault();
        const url = "{{ route('search.categories') }}";
        const method = "GET";
        const search_term = $(this).val();
        searchDataForFilter(url,method,search_term,'.categories-wrapper');
    });
    $("body").on('keyup','.search_projects',function(e){
        e.preventDefault();
        const url = "{{ route('search.projects') }}";
        const method = "GET";
        const search_term = $(this).val();
        searchDataForFilter(url,method,search_term,'.projects-wrapper');
    });


    $("body").on("click",".apply_filter_from_sidebar",function(e){
        e.preventDefault();
        const categories = $('input[name="categories_filter[]"]:checked').map(function () {return $(this).val();}).get();
        const cities = $('input[name="cities_filter[]"]:checked').map(function () {return $(this).val();}).get();
        const projects = $('input[name="project_filter[]"]:checked').map(function () {return $(this).val();}).get();
        const number_of_bedrooms = $('input[name="number_of_bedrooms[]"]:checked').map(function () {return $(this).val();}).get();
        const property_age = $('input[name="property_age[]"]:checked').map(function () {return $(this).val();}).get();
        formData.delete('categories_filter');
        formData.delete('cities_filter');
        formData.delete('project_filter');
        formData.delete('number_of_bedrooms');
        formData.delete('property_age');
        categories.forEach(value => formData.append('categories_filter[]', value));
        cities.forEach(value => formData.append('cities_filter[]', value));
        projects.forEach(value => formData.append('project_filter[]', value));
        number_of_bedrooms.forEach(value => formData.append('number_of_bedrooms[]', value));
        property_age.forEach(value => formData.append('property_age[]', value));
        filterProperties(1,'POST');
    });
    function searchDataForFilter(url,method,search_term,wrapper){
        var formData = new FormData();
        formData.append('search',search_term);
        const plainObject = Object.fromEntries(formData.entries());
        const queryString = new URLSearchParams(plainObject).toString();
        const fullUrl = `${url}?${queryString}`;
        debounceTimer = setTimeout(() => {
            if (search_term.trim() !== "") {
                CommonLib.ajaxForm('',method,fullUrl).then(d=>{
                    if(d.status === 200){
                        let html = '';
                        d.data.forEach((element,index) => {
                            html += `<li class="checkbox-item"><label><p>${element.name}</p>
                                    <input type="checkbox" value="${element.id}">
                                        <span class="btn-checkbox bChe"></span>
                                    </label>
                                </li>`;
                        });
                        $(wrapper).html(html);
                    }
                }).catch(e=>{
                    CommonLib.notification.error(e.responseJSON.errors);
                });
            }
        }, 300);
    }
</script>
@endsection
@endsection
