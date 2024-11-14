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
                                        <input type="text" placeholder="Enter Keyyword" class="show-search style-default" name="name" tabindex="2" value="" aria-required="true" required="">
                                     </fieldset>
                                     <div class="style-absolute-right">
                                        <div class="style-icon-default"><i class="flaticon-magnifiying-glass"></i></div>
                                     </div>
                                     <div class="box-content-search style-1">
                                        <ul>
                                           <li>
                                              <div class="item1">
                                                 <div>
                                                    <div class="image">
                                                       <img src="frontend/images/author/avatar-8.png" alt="">
                                                    </div>
                                                    <p>Archer House</p>
                                                 </div>
                                                 <div class="text">For Sale</div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="item1">
                                                 <div>
                                                    <div class="image">
                                                       <img src="frontend/images/author/avatar-7.png" alt="">
                                                    </div>
                                                    <p>Home Pitt Street</p>
                                                 </div>
                                                 <div class="text">For Rent</div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="item1">
                                                 <div>
                                                    <div class="image">
                                                       <img src="frontend/images/author/avatar-9.png" alt="">
                                                    </div>
                                                    <p>Villa One Hyde Park</p>
                                                 </div>
                                                 <div class="text">For Rent</div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="item1">
                                                 <div>
                                                    <div class="image">
                                                       <img src="frontend/images/author/avatar-10.png" alt="">
                                                    </div>
                                                    <p>House on the beverly hills</p>
                                                 </div>
                                                 <div class="text">For Sale</div>
                                              </div>
                                           </li>
                                        </ul>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                               <div class="form-style-has-title">
                                  <div class="title">Status</div>
                                  <div class="nice-select" tabindex="0">
                                     <span class="current">All Status</span>
                                     <ul class="list style-radio">
                                        <li data-value="For Sale" class="option selected">For Sale</li>
                                        <li data-value="For Ren" class="option">For Ren</li>
                                        <li data-value="Sold" class="option">Sold</li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                            <div class="divider-1"></div>
                            <div class="group-form">
                               <div class="form-style-has-title">
                                  <div class="title">Type</div>
                                  <div class="nice-select" tabindex="0">
                                     <span class="current">All Type</span>
                                     <ul class="list">
                                        <li data-value class="option selected">All Type</li>
                                        <li data-value="Office" class="option">Office</li>
                                        <li data-value="Villa" class="option">Villa</li>
                                        <li data-value="Shop" class="option">Shop</li>
                                        <li data-value="Single Family" class="option">Single Family</li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="flex gap10">
                            <div class="group-form">
                               <div class="wg-filter">
                                  <div class="tf-button-filter btn-filter"><i class="flaticon-filter"></i>Filter</div>
                                  <div class="open-filter filter-no-content" id="a1">
                                     <div>
                                        <div class="grid-3-cols mb-20">
                                           <div class="nice-select" tabindex="0">
                                              <span class="current">City</span>
                                              <ul class="list">
                                                 <li data-value class="option selected">City</li>
                                                 <li data-value="New York" class="option">New York</li>
                                                 <li data-value="Paris" class="option">Paris</li>
                                                 <li data-value="Ha Noi" class="option">Ha Noi</li>
                                              </ul>
                                           </div>
                                           <div class="nice-select" tabindex="0">
                                              <span class="current">Bedrooms</span>
                                              <ul class="list">
                                                 <li data-value class="option selected">Bedrooms</li>
                                                 <li data-value="1 Bed" class="option">1 Bed</li>
                                                 <li data-value="2 Bed" class="option">2 Bed</li>
                                              </ul>
                                           </div>
                                           <div class="nice-select" tabindex="0">
                                              <span class="current">Bathrooms</span>
                                              <ul class="list">
                                                 <li data-value class="option selected">Bathrooms</li>
                                                 <li data-value="1 Bath" class="option">1 Bath</li>
                                                 <li data-value="2 Bath" class="option">2 Bath</li>
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
                                     <div>
                                        <div class="title">Amenities</div>
                                        <ul class="grid-checkbox">
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Air Conditioning</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Barbeque</p>
                                                 <input type="checkbox" checked>
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Dryer</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Gym</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Lawn</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Microwave</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Refrigerator</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Sauna</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Swimming Pool</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>TV Cable</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>Washer</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                           <li class="checkbox-item">
                                              <label>
                                                 <p>WiFi</p>
                                                 <input type="checkbox">
                                                 <span class="btn-checkbox"></span>
                                              </label>
                                           </li>
                                        </ul>
                                     </div>
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
                      <p class="wow fadeInUp">{{ $totalFoundProperties }} result found</p>
                      <div class="sort-wrap wow fadeInUp" data-wow-delay="0.1s">
                         <p>Sort by</p>
                         <div class="nice-select default" tabindex="0">
                            <span class="current">Newest listings</span>
                            <ul class="list">
                               <li data-value class="option selected">Newest</li>
                               <li data-value="For Ren" class="option">Oldest</li>
                               <li data-value="Sold" class="option">3 days</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
                @include('frontend.layout.property-list')


                {{ $properties->links() }}
             </div>
          </div>
       </div>
    </div>
    <!-- /property-grid -->
 </div>
@endsection
