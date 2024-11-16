@extends('frontend.layout.master')
@section('title','Home')
@section('content')
<div class="main-content default px-60">
    <section class="slider home8">
        <div class="wrap-slider">
            <div class="slider-item">
                <div class="cl-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content">
                                <!-- <div class="sub wow fadeInUp">LET US GUIDE YOUR HOME</div> -->
                                <h1 class="wow fadeInUp mainFs">Find your perfect Rental home</h1>
                                <p class="wow fadeInUp">GET STARTED WITH EXPLORING REAL ESTATE OPTIONS</p>
                                <div class="widget-tabs style-5 wow fadeInUp">
                                    <ul class="widget-menu-tab">
                                        <li class="item-title active">
                                            <span class="inner">Buy</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Rent</span>
                                        </li>
                                    </ul>
                                    <div class="widget-content-tab">
                                        <div class="widget-content-inner active">
                                            <form class="form-search-home6">
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
                                                                <div class="box-content-search style-1 d-none show-filter-data"></div>
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
                                                                                <li data-value="100 $" class="option">100 $</li>
                                                                                <li data-value="150 $" class="option">150 $</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="nice-select" tabindex="0">
                                                                            <span class="current">Max. Price</span>
                                                                            <ul class="list">
                                                                                <li data-value class="option selected">Max. Price</li>
                                                                                <li data-value="1000 $" class="option">1000 $</li>
                                                                                <li data-value="1500 $" class="option">1500 $</li>
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
                                        <div class="widget-content-inner">
                                            <form class="form-search-home6">
                                                <div class="list">
                                                    <div class="group-form form-search-content">
                                                        <div class="form-style-has-title">
                                                            <div class="title">Keyword</div>
                                                            <div class="relative">
                                                                <fieldset class="name">
                                                                    <input type="text" placeholder="Enter Keyword" class="show-search style-default filter_property_by_search_for_rent" name="name" tabindex="2" value="" aria-required="true" required="">
                                                                </fieldset>
                                                                <div class="style-absolute-right">
                                                                    <div class="style-icon-default"><i class="flaticon-magnifiying-glass"></i></div>
                                                                </div>
                                                                <div class="box-content-search style-1 d-none show-filter-data-for-rent"></div>
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
                                                                                <li data-value="100 $" class="option">100 $</li>
                                                                                <li data-value="150 $" class="option">150 $</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="nice-select" tabindex="0">
                                                                            <span class="current">Max. Price</span>
                                                                            <ul class="list">
                                                                                <li data-value class="option selected">Max. Price</li>
                                                                                <li data-value="1000 $" class="option">1000 $</li>
                                                                                <li data-value="1500 $" class="option">1500 $</li>
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
                                        <div class="widget-content-inner">
                                            <form class="form-search-home6">
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
                                                                                <li data-value="100 $" class="option">100 $</li>
                                                                                <li data-value="150 $" class="option">150 $</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="nice-select" tabindex="0">
                                                                            <span class="current">Max. Price</span>
                                                                            <ul class="list">
                                                                                <li data-value class="option selected">Max. Price</li>
                                                                                <li data-value="1000 $" class="option">1000 $</li>
                                                                                <li data-value="1500 $" class="option">1500 $</li>
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
                                <div class="smallTxt">
                                    @if(!empty($topCategories))
                                        @foreach ($topCategories as $cat)
                                            <span class="badge badgesCss text-bg-primary">{{ $cat->properties_count }}+ {{ $cat->name }}</span>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="flex d-none d-sm-block d-sm-none d-md-block mainFlex gap30 mainutx items-center flex-wrap relative z-5 wow fadeInUp">
                                    <div class="text-1 poulatTxt">Popular Search</div>
                                    <div class="list-links ">
                                        @if(!empty($topCategories))
                                            @foreach ($topCategories as $cat)
                                                @if($loop->iteration <= 3)
                                                    <a class="popularSerch" href="{{ route('home.properties',['category_id'=>$cat->id]) }}">{{ $cat->name }}</a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="counter">
                <div class="number-counter">
                    <div class="">
                        <span class="number" data-speed="2500" data-to="620" data-inviewport="yes">620</span>
                    </div>
                    <p>Award Winning</p>
                </div>
                <div class="number-counter">
                    <div class="">
                        <span class="number" data-speed="2500" data-to="2" data-inviewport="yes">2</span>K+
                    </div>
                    <p>Happy Customer</p>
                </div>
                <div class="number-counter">
                    <div class="">
                        <span class="number" data-speed="2500" data-to="500" data-inviewport="yes">500</span>+
                    </div>
                    <p>Property Ready</p>
                </div>
            </div>
        </div>
    </section>
     <section class="tf-section flat-cities style-4">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Get Started With Exploring Real Estate Options</h2>
                         <div class="text wow fadeInUp">Looking to buy, sell, or invest in real estate? Begin your journey with us and explore <br> a wide range of property options to suit your needs and budget. </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="wrap">
                         <div class="swiper-container slider-cities-2">
                             <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2 wow fadeInUp">
                                         <img src="frontend/images/image-box/Buying_home.jpg" alt="Buying_home">
                                         <div class="content">
                                             <p>5353 home</p>
                                             <h4>Buying a home</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2 wow fadeInUp" data-wow-delay="0.1s">
                                         <img src="frontend/images/image-box/Renting_home.jpg" alt="Renting_home">
                                         <div class="content">
                                             <p>23 Properties</p>
                                             <h4>Renting a home</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2 wow fadeInUp" data-wow-delay="0.2s">
                                         <img src="frontend/images/image-box/InvestinRealEstate.jpg" alt="InvestinRealEstate">
                                         <div class="content">
                                             <!-- <p>23 Properties</p> -->
                                             <h4>Invest in <br> Real Estate</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2 wow fadeInUp" data-wow-delay="0.3s">
                                         <img src="frontend/images/image-box/SellRentyourproperty.jpg" alt="SellRentyourproperty">
                                         <div class="content">
                                             <h4>Sell/Rent <br> your property</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2 wow fadeInUp" data-wow-delay="0.4s">
                                         <img src="frontend/images/image-box/Plots_Land.jpg" alt="Plots_Land">
                                         <div class="content">
                                             <p>Plots/Land</p>
                                             <h4>Plots/Land</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2">
                                         <img src="frontend/images/image-box/Explore_Insights.jpg" alt="Explore_Insights">
                                         <div class="content">
                                             <p>Our Insights</p>
                                             <h4>Explore Insights</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2">
                                         <img src="frontend/images/image-box/Buyingcommercial-spaces.jpg" alt="Buyingcommercial-spaces">
                                         <div class="content">
                                             <h4>Buying <br> commercial spaces</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                                 <div class="swiper-slide">
                                     <div class="cities-item style-2">
                                         <img src="frontend/images/image-box/Lease_commercial_spaces.jpg" alt="Lease_commercial_spaces">
                                         <div class="content">
                                             <h4>Lease  <br> commercial spaces</h4>
                                         </div>
                                         <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="tf-section secoss featured-categories">
         <div class="cl-container">
             <div class="top">
                 <div class="cl-container">
                     <div class="row">
                         <div class="col-lg-5">
                             <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                 Buy or rent <br>
                                 properties with no <br>
                                 commission
                             </h2>
                         </div>
                         <div class="col-lg-4">
                             <a href="{{ url('all-properties') }}" class="text-dark tf-button-primary type-1 style-bg-white wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Browse More Properties<i class="icon-arrow-right-add"></i></a>
                         </div>
                         <div class="col-lg-3">
                             <div class="box-agents">
                                 <div class="list-user wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                     <div class="item">
                                         <img src="frontend/images/author/avatar-1.png" alt="">
                                     </div>
                                     <div class="item">
                                         <img src="frontend/images/author/avatar-2.png" alt="">
                                     </div>
                                     <div class="item">
                                         <img src="frontend/images/author/avatar-3.png" alt="">
                                     </div>
                                 </div>
                                 <div class="text wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><span>1000K+</span> <div>Exclusive Agetns</div></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Featured Categories</h2>
                         <div class="text wow fadeInUp">Explore our top property categories and discover the best options for buying  or <br> selling real estate. Whether you're looking for a new home, commercial space</div>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="swiper-container padding-bottom-80 slider-recent-properties pagination-style-2">
                         <div class="swiper-wrapper">
                             <div class="swiper-slide">
                                 <div class="categories-item wow fadeInUp">
                                     <div class="icon">
                                         <i class="flaticon-building"></i>
                                     </div>
                                     <div>
                                         <div class="name">
                                             <a href="#">Town House</a>
                                         </div>
                                         <div class="text">20 Properties</div>
                                     </div>
                                     <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="categories-item wow fadeInUp" data-wow-delay="0.1s">
                                     <div class="icon">
                                         <i class="flaticon-cottage"></i>
                                     </div>
                                     <div>
                                         <div class="name">
                                             <a href="#">Modern Villa</a>
                                         </div>
                                         <div class="text">20 Properties</div>
                                     </div>
                                     <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="categories-item wow fadeInUp" data-wow-delay="0.15s">
                                     <div class="icon">
                                         <i class="flaticon-buildings"></i>
                                     </div>
                                     <div>
                                         <div class="name">
                                             <a href="#">Apartment</a>
                                         </div>
                                         <div class="text">20 Properties</div>
                                     </div>
                                     <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="categories-item wow fadeInUp" data-wow-delay="0.15s">
                                     <div class="icon">
                                         <i class="flaticon-office-building"></i>
                                     </div>
                                     <div>
                                         <div class="name">
                                             <a href="#">Office</a>
                                         </div>
                                         <div class="text">20 Properties</div>
                                     </div>
                                     <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="categories-item">
                                     <div class="icon">
                                         <i class="flaticon-buildings"></i>
                                     </div>
                                     <div>
                                         <div class="name">
                                             <a href="#">Apartment</a>
                                         </div>
                                         <div class="text">20 Properties</div>
                                     </div>
                                     <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="categories-item">
                                     <div class="icon">
                                         <i class="flaticon-office-building"></i>
                                     </div>
                                     <div>
                                         <div class="name">
                                             <a href="#">Office</a>
                                         </div>
                                         <div class="text">20 Properties</div>
                                     </div>
                                     <a href="#" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="swiper-pagination recent-properties-pagination"></div>
                     </div>
                 </div>
             </div> -->
         </div>
     </section>
     <!--  <section class="secoss">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Popular Real Estate Markets</h2>
                         <div class="text wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <ul class="grid-tags">
                         <li><a href="#">The Villages, FL real estate</a></li>
                         <li><a href="#">New York, NY real estate</a></li>
                         <li><a href="#">Madera, CA real estate</a></li>
                         <li><a href="#">Fontana, CA real estate</a></li>
                         <li><a href="#">Moreno Valley, CA real estate</a></li>
                         <li><a href="#">Aurora, IL real estate</a></li>
                         <li><a href="#">Perris, CA real estate</a></li>
                         <li><a href="#">Minnesota Lake, MN real estate</a></li>
                         <li><a href="#">Woodbridge, VA real estate</a></li>
                         <li><a href="#">The Villages, FL real estate</a></li>
                         <li><a href="#">New York, NY real estate</a></li>
                         <li><a href="#">Madera, CA real estate</a></li>
                         <li><a href="#">Fontana, CA real estate</a></li>
                         <li><a href="#">Moreno Valley, CA real estate</a></li>

                     </ul>
                 </div>
             </div>
         </div>
     </section> -->
     <!--  <section class="tf-section perfect-home style-2">
         <div class="cl-container">
             <div class="row">
                 <div class="col-xl-7">
                     <div class="wrap-image">
                         <div>
                             <div class="image item-1  wow fadeInUp" data-wow-delay="0.1s">
                                 <img src="frontend/images/section/perfect-home-4.jpg" alt="">
                             </div>
                             <div class="box  wow fadeInUp" data-wow-delay="0.1s">
                                 <div class="icon">
                                     <i class="flaticon-buy-home"></i>
                                 </div>
                                 <div>
                                     <p>Properties For Sel</p>
                                     <h4>14K</h4>
                                 </div>
                             </div>
                         </div>
                         <div class="image item-2  wow fadeInUp" data-wow-delay="0.1s">
                             <img src="frontend/images/section/perfect-home-5.jpg" alt="">
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-5">
                     <div class="content-right">
                         <h2 class="wow fadeInUp">Why You Should Work <br> With Us</h2>
                         <div class="text-content wow fadeInUp">Pellentesque egestas elementum egestas faucibus sem. Velit <br> nunc egestas ut morbi. Leo diam diam.</div>
                         <ul class="list">
                             <li class="check-ellipse-item style-1 wow fadeInUp">
                                 <div class="icon">
                                     <i class="flaticon-check"></i>
                                 </div>
                                 <p>100% Secure</p>
                             </li>
                             <li class="check-ellipse-item style-1 wow fadeInUp">
                                 <div class="icon">
                                     <i class="flaticon-check"></i>
                                 </div>
                                 <p>Wide Range of Properties</p>
                             </li>
                             <li class="check-ellipse-item style-1 wow fadeInUp">
                                 <div class="icon">
                                     <i class="flaticon-check"></i>
                                 </div>
                                 <p>Buy or Rent Homes</p>
                             </li>
                             <li class="check-ellipse-item style-1 wow fadeInUp">
                                 <div class="icon">
                                     <i class="flaticon-check"></i>
                                 </div>
                                 <p>Truested by Thousands</p>
                             </li>
                         </ul>
                         <a href="#" class="tf-button-primary style-blue wow fadeInUp">Learn More<i class="icon-arrow-right-add"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </section> -->
     @if (!empty($highlyViewedProperties))
     <section class="tf-section flat-homes asdCss">
         <div class="cl-container">
             <div class="row">
             <div class="col-12">
                 <div class="heading-section text-center">
                     <h2 class="wow fadeInUp">Best Featured Homes For You</h2>
                     <div class="text wow fadeInUp">Based on your view history</div>
                 </div>
             </div>
             </div>
             <div class="row">
                 <div class="col-12">
                 <div class="swiper-container slider-recent-properties pagination-style-2">
                     <div class="swiper-wrapper">
                        @foreach($highlyViewedProperties as $viewed)
                         <div class="swiper-slide">
                            <div class="box-dream style-1 wow fadeInUp">
                                <div class="image">
                                    <div class="list-tags">
                                        @if($viewed->type == 'sale')
                                            <a href="#" class="tags-item for-sell">FOR SALE</a>
                                        @else
                                            <a href="#" class="tags-item for-sell">FOR RENT</a>
                                        @endif
                                        <a href="#" class="tags-item featured">FEATURED</a>
                                    </div>
                                    <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                    <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                        <div class="swiper-wrapper">
                                            @if(!empty($viewed->images))
                                                @foreach($viewed->images as $img)
                                                    <div class="swiper-slide">
                                                        <div class="w-full">
                                                            <img class="w-full" src="{{asset('/storage').'/'.$img}}" alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="swiper-pagination box-dream-pagination"></div>
                                        <div class="box-dream-next swiper-button-next"></div>
                                        <div class="box-dream-prev swiper-button-prev"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="head">
                                        <div class="price">₹ {{ number_format($viewed->price,2) }} </div>
                                        <div class="title">
                                        <a href="{{ url('/get-detail-property').'/'.$viewed->id }}">{{ $viewed->name }}</a>
                                        </div>
                                    </div>
                                    <div class="location">
                                        <div class="icon">
                                        <i class="flaticon-location"></i>
                                        </div>
                                        <p>{{ $viewed->location }}</p>
                                    </div>
                                    <div class="icon-box">
                                        <div class="item">
                                            <i class="flaticon-hotel"></i>
                                            <p>{{ $viewed->number_bedroom }}</p>
                                        </div>
                                        <div class="item">
                                            <i class="flaticon-bath-tub"></i>
                                            <p>{{ $viewed->number_bathroom }}</p>
                                        </div>
                                        <div class="item">
                                        <i class="flaticon-minus-front"></i>
                                        <p>{{ $viewed->square }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                        @endforeach
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     @endif
     <section class="tf-section nonePadding work-with-us style-3">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Featured Properties</h2>
                         <div class="text wow fadeInUp">Explore our Featured Properties collection, showcasing the <br> best in residential, commercial, and investment opportunities. </div>
                     </div>
                 </div>
             </div>
             @if(!empty($featuredProjects))
             <div class="widget-tabs style-1">
                 <div class="row">
                     <div class="col-12">
                         <ul class="widget-menu-tab">
                            @foreach($featuredProjects as $category)
                                <li class="item-title {{ ($loop->first) ? 'active' : ''}}">
                                    <span class="inner">{{ $category->name }}</span>
                                </li>
                            @endforeach
                         </ul>
                     </div>
                 </div>
                 <div class="widget-content-tab">

                    @foreach($featuredProjects as $pr)
                     <div class="widget-content-inner {{ ($pr->properties->count() > 0) ? 'active' : ''}}">
                         <div class="row">
                            @if($pr->properties->isNotEmpty())
                                @foreach($pr->properties as $proj)
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <div class="box-dream style-absolute type-no-bg-content">
                                            <div class="image">
                                                <div class="list-tags">
                                                    <a href="#" class="tags-item featured">FEATURED</a>
                                                </div>
                                                @if(!empty($proj->images))
                                                    @foreach ($proj->images as $iimages)
                                                        @if($loop->first)
                                                            <img class="w-full" src="{{asset('/storage').'/'.$iimages }}" alt="">
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <img class="w-full" src="frontend/images/image-box/Nalanda.jpg" alt="">
                                                @endif
                                            </div>
                                            <div class="content">
                                                <div class="head">
                                                    <div class="title">
                                                        <a href="{{ url('/get-detail-property').'/'.$proj->id }}">{{ $proj->name }}</a>
                                                    </div>
                                                </div>
                                                <div class="location">
                                                    <div class="icon">
                                                        <i class="flaticon-location"></i>
                                                    </div>
                                                    <p>{{ $proj->location }}</p>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <div class="icon-box">
                                                        <div class="item">
                                                            <i class="flaticon-hotel"></i>
                                                            <p>{{ $proj->number_bedroom }}</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-bath-tub"></i>
                                                            <p>{{ $proj->number_bathroom }}</p>
                                                        </div>
                                                        <div class="item">
                                                            <i class="flaticon-minus-front"></i>
                                                            <p>{{ $proj->square }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="price">₹{{ number_format($proj->price,2) }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                         </div>
                     </div>
                    @endforeach
                 </div>
             </div>
             @endif
             <div class="row">
                 <div class="col-12">
                     <a href="{{ url('all-properties').'?property_type=featured' }}" class="tf-button-primary border-radius-corner m-auto wow fadeInUp">See All Listing<i class="icon-arrow-right-add"></i></a>
                 </div>
             </div>
         </div>
     </section>
     @if(!empty($homeInteriorCategories))
     <section class="tf-section featured-categories style-4">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="flex justify-between items-center top-heading">
                         <div class="heading-section">
                             <h2 class="wow fadeInUp">Home Interior</h2>
                             <div class="text wow fadeInUp">Based on your view history</div>
                         </div>
                         <a href="home-interior.php" class="tf-button-no-bg wow fadeInUp">
                             View All Categories
                             <i class="icon-arrow-right-add"></i>
                         </a>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="wrap mobile-wrap">
                        @foreach ($homeInteriorCategories as $interiorCategory)
                         <div class="cities-item style-6 wow fadeInUp">
                             <div class="image">
                                @php
                                    $property = $interiorCategory->properties->first();
                                @endphp
                                @if(isset($interiorCategory->properties[0]) && !empty($interiorCategory->properties[0]->images[0]))
                                    <img src="{{ asset('/storage').'/'.$interiorCategory->properties[0]->images[0] }}" alt="groundfloor-livingroom">
                                @else
                                    <img src="frontend/images/house/groundfloor-livingroom.jpg" alt="groundfloor-livingroom">
                                @endif
                             </div>
                             <div class="content">
                                 <a href="{{ route('home.properties',['category_id'=>$interiorCategory->id]) }}">
                                     <h4>{{ $interiorCategory->name }}</h4>
                                 <p>{{ $interiorCategory->properties->count() }} Properties</p>
                                 </a>
                             </div>
                         </div>
                        @endforeach
                     </div>

                 </div>
             </div>
         </div>
     </section>
     @endif
     <!-- <section class="tf-section hshsCss flat-explore">
      <div class="cl-container">
         <div class="row">
            <div class="col-12">
               <div class="heading-section text-center">
                  <h2 class="wow fadeInUp">Explore construction 🏗 services</h2>
                  <div class="text wow fadeInUp">Based on your view history</div>
               </div>
            </div>
            <div class="col-12">
               <div class="wrap">
                  <div class="cities-item style-3 wow fadeInUp">
                     <img src="frontend/images/house/our-properties-1.jpg" alt="">
                     <div class="content">
                        <h4>Town House</h4>
                        <p>17 Properties</p>
                     </div>
                     <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                  </div>
                  <div class="cities-item style-3 wow fadeInUp" data-wow-delay="0.1s">
                     <img src="frontend/images/house/our-properties-2.jpg" alt="">
                     <div class="content">
                        <h4>Modern Villa</h4>
                        <p>17 Properties</p>
                     </div>
                     <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                  </div>
                  <div class="cities-item style-3 wow fadeInUp" data-wow-delay="0.15s">
                     <img src="frontend/images/house/our-properties-3.jpg" alt="">
                     <div class="content">
                        <h4>Apartment</h4>
                        <p>17 Properties</p>
                     </div>
                     <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                  </div>
                  <div class="cities-item style-3 wow fadeInUp" data-wow-delay="0.2s">
                     <img src="frontend/images/house/our-properties-4.jpg" alt="">
                     <div class="content">
                        <h4>Single Family</h4>
                        <p>17 Properties</p>
                     </div>
                     <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                  </div>
                  <div class="cities-item style-3 wow fadeInUp" data-wow-delay="0.25s">
                     <img src="frontend/images/house/our-properties-5.jpg" alt="">
                     <div class="content">
                        <h4>Office</h4>
                        <p>17 Properties</p>
                     </div>
                     <a href="#!" class="button-arrow-right"><i class="icon-arrow-right-add"></i></a>
                  </div>
               </div>
            </div>
         </div>
         </div>
     </section> -->
     <section class="tf-section featured-categories altCss style-2">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="flex justify-between items-center top-heading">
                         <div class="heading-section">
                             <h2 class="wow fadeInUp">Service what we provide</h2>
                             <div class="text wow fadeInUp">Based on your view history</div>
                         </div>
                         <a href="#!" class="tf-button-no-bg wow fadeInUp">
                             View All Categories
                             <i class="icon-arrow-right-add"></i>
                         </a>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="wrap mobile-wrap">
                         <div class="categories-item style-1 wow fadeInUp">
                             <div class="icon">
                                 <i class="fa fa-home"></i>
                             </div>
                             <div>
                                 <div class="name">
                                     <a href="#">Interior</a>
                                 </div>
                                 <div class="text">Interior design services</div>
                             </div>
                         </div>
                         <div class="categories-item style-1 wow fadeInUp" data-wow-delay="0.1s">
                             <div class="icon">
                                 <i class="fa fa-cog"></i>
                             </div>
                             <div>
                                 <div class="name">
                                     <a href="#">Construction</a>
                                 </div>
                                 <div class="text">Construction services</div>
                             </div>
                         </div>
                         <div class="categories-item style-1 wow fadeInUp" data-wow-delay="0.15s">
                             <div class="icon">
                                 <i class="fa fa-gear fa-spin"></i>
                             </div>
                             <div>
                                 <div class="name">
                                     <a href="#">Equipment on Rent</a>
                                 </div>
                                 <div class="text">Rental of Construction or home equipment.</div>
                             </div>
                         </div>
                         <!-- <div class="categories-item style-1 wow fadeInUp" data-wow-delay="0.2s">
                             <div class="icon">
                                 <i class="flaticon-office-building"></i>
                             </div>
                             <div>
                                 <div class="name">
                                     <a href="#">Too Let Services</a>
                                 </div>
                                 <div class="text">Service for managing "To Let" listings</div>
                             </div>
                         </div> -->
                         <div class="categories-item style-1 wow fadeInUp" data-wow-delay="0.25s">
                             <div class="icon">
                                 <i class="flaticon-cottage"></i>
                             </div>
                             <div>
                                 <div class="name">
                                     <a href="#">Material Provider</a>
                                 </div>
                                 <div class="text">List of Construction material providers</div>
                             </div>
                         </div>
                         <div class="categories-item style-1 wow fadeInUp" data-wow-delay="0.3s">
                             <div class="icon">
                                 <i class="flaticon-user"></i>
                             </div>
                             <div>
                                 <div class="name">
                                     <a href="#">Agent</a>
                                 </div>
                                 <div class="text">A dedicated panel for real estate agents</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <br>
     <br>
     <br>
     <br>
     <br>
     <div class="parallax-wrap">
         <div class="content">
             <div class="heading wow fadeInUp text-white">Patliputra Property Hub <br> Assist Plan For Builders</div>
             <div class="text wow fadeInUp text-white">At Property Handler, we offer comprehensive support for builders through our Property Handler Assist Plan, <br> designed to help streamline your property development process, enhance sales, and maximize profitability.</div>
             <a href="#" class="tf-button-primary style-green m-auto wow fadeInUp">Enquiry Now<i class="icon-arrow-right-add"></i></a>
         </div>
     </div>
     <section class="tf-section luxury-home u7Css style-5">
         <div class="cl-container">
             <div class="row justify-between">
             <div class="col-md-6">
                 <div class="image wow fadeInLeft">
                     <img src="frontend/images/section/luxury-home-4.jpg" alt="">
                     <div class="box">
                         <div class="icon">
                         <i class="flaticon-customer"></i>
                         </div>
                         <div>
                         <p>Total Clients</p>
                         <h4>7,000 M</h4>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-5 col-md-6">
                 <div class="content">
                     <h2 class="wow fadeInUp">Residential & Commercial  <br> Plots/Land</h2>
                     <div class="text-content wow fadeInUp">Looking for the perfect piece of land for your dream home or business venture? Discover a variety of residential and commercial plots/land that cater to every need, whether you're building a home, developing a commercial space, or investing in property.</div>
                     <a href="#" class="tf-button-primary style-black wow fadeInUp">Explore Plots/Land <i class="icon-arrow-right-add"></i></a>
                 </div>
             </div>
             </div>
         </div>
     </section>
     <br>
     <br>
     <br>
     <br>
     <section class="account-bar style-1 type-container">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="wrap">
                         <div class="row justify-center">
                             <div class="col-10">
                                 <div class="flex justify-between items-center flex-wrap gap15">
                                     <div>
                                         <h3 class="wow fadeInUp">Sign in to streamline your search</h3>
                                         <div class="text wow fadeInUp">Save properties, create alerts and keep track of the enquiries you send to agents.</div>
                                     </div>
                                     <a href="#" class="tf-button-primary wow fadeInUp text-white">Sign in or create an account<i class="icon-arrow-right-add"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="tf-section fCate flat-counter">
         <div class="cl-container">
             <div class="row">
             <div class="col-12">
                 <div class="heading-section text-center">
                     <h2 class="wow fadeInUp">Our mission is to redefine real estate <br> in the customer's favor.</h2>
                     <div class="text wow fadeInUp">Based on your view history</div>
                 </div>
             </div>
             </div>
             <div class="counter">
             <div class="row">
                 <div class="col-xl-3 col-md-6">
                     <div class="number-counter style-1">
                         <div class="text-center">
                         ₹<span class="number" data-speed="2500" data-to="16" data-inviewport="yes">16</span>.4M
                         </div>
                         <h4>Owned from properties <br> transactions</h4>
                         <p class="text-content">we specialize in offering a wide range of owned properties for sale and lease, ensuring transparency </p>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6">
                     <div class="number-counter style-1">
                         <div class="text-center">
                         <span class="number" data-speed="2500" data-to="26" data-inviewport="yes">26</span>K+
                         </div>
                         <h4>Properties For <br> Buy</h4>
                         <p class="text-content">Looking to purchase the perfect property? Whether it’s for residential, commercial, or investment purposes</p>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6">
                     <div class="number-counter style-1">
                         <div class="text-center">
                         <span class="number" data-speed="2500" data-to="14" data-inviewport="yes">14</span>K+
                         </div>
                         <h4>Properties Buy <br> Sell</h4>
                         <p class="text-content">Whether you're looking to buy your dream property or sell your existing one, we offer a seamless and efficient process to help you </p>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6">
                     <div class="number-counter style-1">
                         <div class="text-center">
                         <span class="number" data-speed="2500" data-to="2" data-inviewport="yes"> </span> Lakh +
                         </div>
                         <h4>New Listings Monthly</h4>
                         <p class="text-content">Stay updated with our monthly property listings and explore the latest opportunities for buying or selling. Whether you're in the market for a new home</p>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     @if (!empty($properties))
     <section class="tf-section sdws recent-properties style-1">
         <div class="cl-container">
             <div class="row">
             <div class="col-12">
                 <div class="heading-section text-center">
                     <h2 class="wow fadeInUp">Handpicked Residential Projects</h2>
                     <div class="text wow fadeInUp">Based on your view history</div>
                 </div>
             </div>
             <div class="col-12">
                 <div class="swiper-container slider-recent-properties pagination-style-2">
                     <div class="swiper-wrapper">
                        @foreach($properties as $property)
                            <div class="swiper-slide">
                                <div class="box-dream style-1 wow fadeInUp">
                                    <div class="image">
                                        <div class="list-tags">
                                            @if($property->type == 'sale')
                                                <a href="#" class="tags-item for-sell">FOR SALE</a>
                                            @else
                                                <a href="#" class="tags-item for-sell">FOR RENT</a>
                                            @endif
                                            @if($property->is_featured)
                                                <a href="#" class="tags-item featured">FEATURED</a>
                                            @endif
                                        </div>
                                        <div class="button-heart"><i class="flaticon-heart-1"></i></div>
                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                            <div class="swiper-wrapper">
                                                @if(!empty($property->images))
                                                    @foreach($property->images as $img)
                                                        <div class="swiper-slide">
                                                            <div class="w-full">
                                                                <img class="w-full" src="{{asset('/storage').'/'.$img}}" alt="">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="swiper-pagination box-dream-pagination"></div>
                                            <div class="box-dream-next swiper-button-next"></div>
                                            <div class="box-dream-prev swiper-button-prev"></div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="head">
                                            <div class="price">₹ {{ number_format($property->price,2) }} </div>
                                            <div class="title">
                                            <a href="#!">{{ $property->name }}</a>
                                            </div>
                                        </div>
                                        <div class="location">
                                            <div class="icon">
                                            <i class="flaticon-location"></i>
                                            </div>
                                            <p>{{ $property->location }}</p>
                                        </div>
                                        <div class="icon-box">
                                            <div class="item">
                                                <i class="flaticon-hotel"></i>
                                                <p>{{ $property->number_bedroom }}</p>
                                            </div>
                                            <div class="item">
                                                <i class="flaticon-bath-tub"></i>
                                                <p>{{ $property->number_bathroom }}</p>
                                            </div>
                                            <div class="item">
                                            <i class="flaticon-minus-front"></i>
                                            <p>{{ $property->square }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                     </div>
                     <div class="swiper-pagination recent-properties-pagination"></div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     @endif
     <section class="tf-section cityCsss flat-cities style-3">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="flex justify-between items-center top-heading">
                         <div class="heading-section ">
                             <h2 class="wow fadeInUp">Find Properties in These Cities</h2>
                             <div class="text wow fadeInUp">Discover the best real estate opportunities in top cities across the country. <br> Whether you’re looking for a home, commercial space, or investment property, we’ve got you covered.</div>
                         </div>
                         <a href="#!" class="tf-button-no-bg wow fadeInUp">
                             View All Cities
                             <i class="icon-arrow-right-add"></i>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="inner style-1">
                        @if(!empty($popularCities))
                            @foreach ($popularCities as $cities)
                            <div class="cities-item style-4 item-{{ $loop->iteration }} wow fadeInUp">
                                @if(isset($cities->properties[0]) && isset($cities->properties[0]->images[0]))
                                    <img src="{{ asset('/storage').'/'.$cities->properties[0]->images[0] }}" alt="">
                                @else
                                    <img src="frontend/images/image-box/cities-1.jpg" alt="">
                                @endif
                                <div class="content">
                                    <p>{{ $cities->properties_count }} Properties</p>
                                    <h4>{{ $cities->name }} ({{ $cities->state->name }})</h4>
                                </div>
                            </div>
                            @endforeach
                        @endif
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- <section class="tf-section flat-testimonial style-5">
         <div class="testimonials">
             <div class="cl-container">
             <div class="row justify-between">
                 <div class="col-12">
                     <div class="testimonials-inner style-row">
                         <div>
                         <h2 class="wow fadeInUp">What our customers are <br> saying us?</h2>
                         </div>
                         <div class="list">
                         <div class="item wow fadeInUp">
                             <h3>13m+</h3>
                             <p>Happy People</p>
                         </div>
                         <div class="item  wow fadeInUp" data-wow-delay="0.1s">
                             <h3>4.88</h3>
                             <p>Overall rating</p>
                             <div class="ratings">
                                 <i class="flaticon-star-1"></i>
                                 <i class="flaticon-star-1"></i>
                                 <i class="flaticon-star-1"></i>
                                 <i class="flaticon-star-1"></i>
                                 <i class="flaticon-star-1"></i>
                             </div>
                         </div>
                         </div>
                     </div>
                     <div class="swiper-container slider-testimonials-1">
                         <div class="swiper-wrapper">
                         <div class="swiper-slide">
                             <div class="testimonials-item background-white wow fadeInUp">
                                 <div class="head">
                                     <div class="image">
                                     <img src="frontend/images/author/author-1.png" alt="">
                                     </div>
                                     <div>
                                     <div class="title">
                                         <a href="#">Shubham Raibhandar</a>
                                     </div>
                                     <p>Helps us to find good properties</p>
                                     </div>
                                 </div>
                                 <div class="description">"The site really helps us to find good properties in the least amount of time without any headache of Patliputra Property Hub. I was so scared in Pune due to the issues of high deposit as well as brokerage. I was new and had no time. But then I found NoBroker. It is simply a ..."</div>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                     <g filter="url(#filter0_d_249_14836)">
                                     <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                     </g>
                                     <defs>
                                     <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                         <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                         <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                         <feOffset dx="6" dy="6"></feOffset>
                                         <feComposite in2="hardAlpha" operator="out"></feComposite>
                                         <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                         <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                         <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                     </filter>
                                     </defs>
                                 </svg>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="testimonials-item background-white wow fadeInUp" data-wow-delay="0.1s">
                                 <div class="head">
                                     <div class="image">
                                     <img src="frontend/images/author/author-2.png" alt="">
                                     </div>
                                     <div>
                                     <div class="title">
                                         <a href="#">Shubham Raibhandar</a>
                                     </div>
                                     <p>Helps us to find good properties</p>
                                     </div>
                                 </div>
                                 <div class="description">"The site really helps us to find good properties in the least amount of time without any headache of Patliputra Property Hub. I was so scared in Pune due to the issues of high deposit as well as brokerage. I was new and had no time. But then I found NoBroker. It is simply a ..."</div>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                     <g filter="url(#filter0_d_249_14836)">
                                     <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                     </g>
                                     <defs>
                                     <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                         <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                         <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                         <feOffset dx="6" dy="6"></feOffset>
                                         <feComposite in2="hardAlpha" operator="out"></feComposite>
                                         <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                         <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                         <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                     </filter>
                                     </defs>
                                 </svg>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="testimonials-item background-white wow fadeInUp" data-wow-delay="0.2s">
                                 <div class="head">
                                     <div class="image">
                                     <img src="frontend/images/author/author-3.png" alt="">
                                     </div>
                                     <div>
                                     <div class="title">
                                         <a href="#">Shubham Raibhandar</a>
                                     </div>
                                     <p>Helps us to find good properties</p>
                                     </div>
                                 </div>
                                 <div class="description">"The site really helps us to find good properties in the least amount of time without any headache of Patliputra Property Hub. I was so scared in Pune due to the issues of high deposit as well as brokerage. I was new and had no time. But then I found NoBroker. It is simply a ..."</div>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                     <g filter="url(#filter0_d_249_14836)">
                                     <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                     </g>
                                     <defs>
                                     <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                         <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                         <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                         <feOffset dx="6" dy="6"></feOffset>
                                         <feComposite in2="hardAlpha" operator="out"></feComposite>
                                         <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                         <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                         <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                     </filter>
                                     </defs>
                                 </svg>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="testimonials-item background-white">
                                 <div class="head">
                                     <div class="image">
                                     <img src="frontend/images/author/author-2.png" alt="">
                                     </div>
                                     <div>
                                     <div class="title">
                                         <a href="#">Shubham Raibhandar</a>
                                     </div>
                                     <p>Helps us to find good properties</p>
                                     </div>
                                 </div>
                                 <div class="description">"The site really helps us to find good properties in the least amount of time without any headache of Patliputra Property Hub. I was so scared in Pune due to the issues of high deposit as well as brokerage. I was new and had no time. But then I found NoBroker. It is simply a ..."</div>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                     <g filter="url(#filter0_d_249_14836)">
                                     <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                     </g>
                                     <defs>
                                     <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                         <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                         <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                         <feOffset dx="6" dy="6"></feOffset>
                                         <feComposite in2="hardAlpha" operator="out"></feComposite>
                                         <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                         <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                         <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                     </filter>
                                     </defs>
                                 </svg>
                             </div>
                         </div>
                         <div class="swiper-slide">
                             <div class="testimonials-item background-white">
                                 <div class="head">
                                     <div class="image">
                                     <img src="frontend/images/author/author-3.png" alt="">
                                     </div>
                                     <div>
                                     <div class="title">
                                         <a href="#">Shubham Raibhandar</a>
                                     </div>
                                     <p>Helps us to find good properties</p>
                                     </div>
                                 </div>
                                 <div class="description">"The site really helps us to find good properties in the least amount of time without any headache of Patliputra Property Hub. I was so scared in Pune due to the issues of high deposit as well as brokerage. I was new and had no time. But then I found NoBroker. It is simply a ..."</div>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="45" height="44" viewBox="0 0 45 44" fill="none">
                                     <g filter="url(#filter0_d_249_14836)">
                                     <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#1A1A1A"></path>
                                     </g>
                                     <defs>
                                     <filter id="filter0_d_249_14836" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                         <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                         <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                         <feOffset dx="6" dy="6"></feOffset>
                                         <feComposite in2="hardAlpha" operator="out"></feComposite>
                                         <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"></feColorMatrix>
                                         <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_249_14836"></feBlend>
                                         <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_249_14836" result="shape"></feBlend>
                                     </filter>
                                     </defs>
                                 </svg>
                             </div>
                         </div>
                         </div>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>  -->
     <section class="tf-section mains41s">
         <div class="cl-container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="group-icon">
                         <h3 class="wow fadeInUp">Looking for the new <br> home?</h3>
                         <div class="text-content wow fadeInUp">10 new offers every day. 350 offers on site, trusted by <br> a community of thousands of users.</div>
                         <a href="#" class="tf-button-primary style-blue wow fadeInUp">Get Started<i class="icon-arrow-right-add"></i></a>
                         <div class="image wow fadeInUp"><img src="frontend/images/image-box/img-1.svg" alt=""></div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="group-icon style-1">
                         <h3 class="wow fadeInUp">Want to sell your <br> home?</h3>
                         <div class="text-content wow fadeInUp">10 new offers every day. 350 offers on site, trusted by <br> a community of thousands of users.</div>
                         <a href="#" class="tf-button-primary style-blue wow fadeInUp">Get Started<i class="icon-arrow-right-add"></i></a>
                         <div class="image wow fadeInUp"><img src="frontend/images/image-box/img-2.svg" alt=""></div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="tf-section flat-area tf-section uuy7yza   ">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Explore Real Estate in Bihar</h2>
                         <div class="text wow fadeInUp">TOP CITIES</div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/dd.jpg" alt="Bhagalpur">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Bhagalpur</a>
                             </div>
                             <div class="text">130,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Muzaffarpur.jpg" alt="Muzaffarpur">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Muzaffarpur</a>
                             </div>
                             <div class="text">29,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Sasaram.jpg" alt="Sasaram">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Sasaram </a>
                             </div>
                             <div class="text">27,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Darbhanga.jpg" alt="Darbhanga">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Darbhanga</a>
                             </div>
                             <div class="text">25,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Siwan.jpg" alt="Siwan">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Siwan</a>
                             </div>
                             <div class="text">27,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Hajipur.jpg" alt="Hajipur">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Hajipur</a>
                             </div>
                             <div class="text">16,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Nalanda.jpg" alt="Nalanda">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Nalanda</a>
                             </div>
                             <div class="text">19,000+ Properties</div>
                         </div>
                     </div>
                 </div>
             <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Bhojpur.jpg" alt="Bhojpur">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Bhojpur</a>
                             </div>
                             <div class="text">15,000+ Properties</div>
                         </div>
                     </div>
                 </div>
             <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Saran.jpg" alt="Saran">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Saran</a>
                             </div>
                             <div class="text">20 Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Rohtas.jpg" alt="Rohtas">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Rohtas</a>
                             </div>
                             <div class="text">29,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/Buxar.jpg" alt="Buxar">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">Buxar</a>
                             </div>
                             <div class="text">27,000+ Properties</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-6">
                     <div class="area-item wow fadeInUp">
                         <div class="image">
                             <img src="frontend/images/image-box/West_Champaran.jpg" alt="West_Champaran">
                         </div>
                         <div>
                             <div class="name">
                                 <a href="#!">West Champaran</a>
                             </div>
                             <div class="text">25,000+ Properties</div>
                         </div>
                     </div>
                 </div>


             </div>
         </div>
     </section>
     <!--  <section class="tf-section locatioVss popular-real">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Top Places Real Estate Location</h2>
                         <div class="text wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <ul class="grid-tags">
                         <li><a href="#!">The Villages, FL real estate</a></li>
                         <li><a href="#!">New York, NY real estate</a></li>
                         <li><a href="#!">Madera, CA real estate</a></li>
                         <li><a href="#!">Fontana, CA real estate</a></li>
                         <li><a href="#!">Moreno Valley, CA real estate</a></li>
                         <li><a href="#!">Aurora, IL real estate</a></li>
                         <li><a href="#!">Perris, CA real estate</a></li>
                         <li><a href="#!">Minnesota Lake, MN real estate</a></li>
                         <li><a href="#!">Woodbridge, VA real estate</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </section> -->

     <section class="tf-section work-with-us style-2">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Why You Should Buy/Sell With Us</h2>
                         <div class="text wow fadeInUp">Extensive Property Listings: Access a wide range of properties tailored to your preferences and budget.</div>
                     </div>
                 </div>
             </div>
             <div class="row justify-center">
             <div class="col-xl-10">
                 <div class="wrap">
                     <div class="box-icon style-1 wow fadeInUp">
                         <div class="icon has-ellipse">
                             <i class="flaticon-house-1"></i>
                         </div>
                         <div class="content">
                             <a class="title">Wide Range of Properties</a>
                             <p>We offer expert legal help for all related <br> property items in Dubai.</p>
                         </div>
                     </div>
                     <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.1s">
                         <div class="icon has-ellipse">
                             <i class="flaticon-home"></i>
                         </div>
                         <div class="content">
                             <a class="title">Buy or Rent Homes</a>
                             <p>We sell your home at the best market price <br> and very quickly as well.</p>
                         </div>
                     </div>
                     <div class="box-icon style-1 wow fadeInUp" data-wow-delay="0.2s">
                         <div class="icon has-ellipse">
                             <i class="flaticon-shield"></i>
                         </div>
                         <div class="content">
                             <a class="title">Thrusted by Thousands</a>
                             <p>We offer you free consultancy to get a loan <br> for your new home.</p>
                         </div>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     <br>
     <br>
     <br>
     <br>
     <section class="tf-section flat-news nness">
         <div class="cl-container">
             <div class="row">
                 <div class="col-12">
                     <div class="heading-section text-center">
                         <h2 class="wow fadeInUp">Recent Articles & News</h2>
                         <div class="text wow fadeInUp">Keep up-to-date with the latest trends, insights, and news in the real estate market. <br> Our recent articles provide valuable information to help you make informed decisions when buying or selling property.</div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="swiper-container slider-news slider-auto">
                         <div class="swiper-wrapper">
                             <div class="swiper-slide">
                                 <div class="wg-blog wow fadeInUp">
                                     <div class="image">
                                         <img src="frontend/images/blog/blog-grid-1.jpg" alt="">
                                     </div>
                                     <div class="content">
                                         <div class="sub-blog">
                                             <div>Market Trends</div>
                                             <div>April 26, 2024</div>
                                         </div>
                                         <div class="name">
                                             <a href="#!">Explore the latest property market trends, including price fluctuations, demand</a>
                                         </div>
                                         <a href="#" class="tf-button-no-bg">
                                             Read More
                                             <i class="icon-arrow-right-add"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="wg-blog wow fadeInUp" data-wow-delay="0.1s">
                                     <div class="image">
                                         <img src="frontend/images/blog/blog-grid-2.jpg" alt="">
                                     </div>
                                     <div class="content">
                                         <div class="sub-blog">
                                             <div>Buying Tips</div>
                                             <div>April 26, 2024</div>
                                         </div>
                                         <div class="name">
                                             <a href="#!">Essential tips for first-time homebuyers, investment strategies, and location-specific advice  </a>
                                         </div>
                                         <a href="#" class="tf-button-no-bg">
                                             Read More
                                             <i class="icon-arrow-right-add"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="wg-blog wow fadeInUp" data-wow-delay="0.2s">
                                     <div class="image">
                                         <img src="frontend/images/blog/blog-grid-3.jpg" alt="">
                                     </div>
                                     <div class="content">
                                         <div class="sub-blog">
                                             <div>Selling Guides</div>
                                             <div>April 26, 2024</div>
                                         </div>
                                         <div class="name">
                                             <a href="#!">Learn how to sell your property faster with tips on home staging, pricing strategies</a>
                                         </div>
                                         <a href="#" class="tf-button-no-bg">
                                             Read More
                                             <i class="icon-arrow-right-add"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="wg-blog wow fadeInUp" data-wow-delay="0.3s">
                                     <div class="image">
                                         <img src="frontend/images/blog/blog-grid-4.jpg" alt="">
                                     </div>
                                     <div class="content">
                                         <div class="sub-blog">
                                             <div>Legal Insights</div>
                                             <div>April 26, 2024</div>
                                         </div>
                                         <div class="name">
                                             <a href="#!">Stay informed about the legal aspects of real estate transactions, including documentation</a>
                                         </div>
                                         <a href="#" class="tf-button-no-bg">
                                             Read More
                                             <i class="icon-arrow-right-add"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="wg-blog">
                                     <div class="image">
                                         <img src="frontend/images/blog/blog-grid-3.jpg" alt="">
                                     </div>
                                     <div class="content">
                                         <div class="sub-blog">
                                             <div>Tips &amp; Tricks</div>
                                             <div>April 26, 2024</div>
                                         </div>
                                         <div class="name">
                                             <a href="#!">That’s Life! Frank Sinatra’s Former Los Angeles-Area </a>
                                         </div>
                                         <a href="#" class="tf-button-no-bg">
                                             Read More
                                             <i class="icon-arrow-right-add"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <br>
     <br>
     <br>
     <br>
     <br>
     <section class="tf-section-default">
         <div class="cl-container">
             <div class="row">
                 <div class="col-10 offset-1">
                     <div class="download-app">
                         <div class="content-right">
                             <div class="sub wow fadeInUp">Start today</div>
                             <div class="heading wow fadeInUp">Download the App</div>
                             <p class="wow fadeInUp">Take classes on the go with the just home app. Stream or download <br> to watch on the plane, the subway, or wherever you learn best.</p>
                             <ul class="ft-download style-1">
                                 <li class="wow fadeInUp">
                                     <a href="#">
                                         <div class="icon">
                                             <i class="icon-appleinc"></i>
                                         </div>
                                         <div class="app">
                                             <div>Download on the</div>
                                             <div>Apple Store</div>
                                         </div>
                                     </a>
                                 </li>
                                 <li class=" wow fadeInUp" data-wow-delay="0.1s">
                                     <a href="#">
                                         <div class="icon">
                                             <i class="icon-ch-play"></i>
                                         </div>
                                         <div class="app">
                                             <div>Get in on</div>
                                             <div>Google Play</div>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <div class="image wow fadeInRight">
                             <img style="max-width: 356px;" src="frontend/images/section/download-apps.jpg" alt="">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <br>
     <br>
     <br>
     <section class="tf-section-default finest-selection">
         <div class="cl-container">
             <div class="row">
             <div class="col-12">
                 <div class="inner">
                     <div class="content">
                     <h5 class="selOnes">SELL OR RENT YOUR PROPERTY</h5>
                         <h2 class="wow fadeInUp">Register to post <br> your property for  <span class="badge bg-success msbafges">FREE</span> </h2>
                         <div class="text-content main8s2s wow fadeInUp">Post your residential / commercial property</div>

                         <div class="counter noidcss">
                             <div class="number-counter">
                                 <div class="">
                                     <span class="number counterStykle" data-speed="2500" data-to="2" data-inviewport="yes">2</span><span class="counterStykle">L+



                                     </span>
                                 </div>
                                 <p class="maniu7s">Property Listings</p>
                             </div>
                             <div class="number-counter">
                                 <div class="">
                                     <span class="number counterStykle" data-speed="2500" data-to="2" data-inviewport="yes">2</span><span class="counterStykle">K+</span>
                                 </div>
                                 <p class="maniu7s">Happy Customer</p>
                             </div>
                             <div class="number-counter">
                                 <div class="">
                                     <span class="number counterStykle" data-speed="2500" data-to="500" data-inviewport="yes">500</span> <span class="counterStykle"> + </span>
                                 </div>
                                 <p class="maniu7s">Property Ready</p>
                             </div>
                         </div>

                         <a href="#" class="tf-button-primary style-black wow fadeInUp">Post your property for FREE<i class="icon-arrow-right-add"></i></a>
                     </div>
                     <div class="image">
                         <img src="frontend/images/section/img-half-1s.jpg" alt="">
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     <section class="tf-section tab-search">
         <div class="cl-container">
         <div class="row">
                 <div class="col-12">
                     <div class="heading-section">
                         <h2 class="wow fadeInUp">Curated Quick Links</h2>
                         <div class="text wow fadeInUp">Looking to buy, sell, or invest in real estate? Begin your journey with us and explore <br> a wide range of property options to suit your needs and budget. </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="widget-tabs style-2">
                         <ul class="widget-menu-tab">
                             <li class="item-title active">
                                 <span class="inner">Real Estate</span>
                             </li>
                             <li class="item-title">
                                 <span class="inner">New Homes</span>
                             </li>
                             <li class="item-title">
                                 <span class="inner">Popular Area</span>
                             </li>
                             <li class="item-title">
                                 <span class="inner">Popular Searches</span>
                             </li>
                         </ul>
                         <div class="widget-content-tab">
                             <div class="widget-content-inner active">
                                 <div class="gird-tab-search">
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate Adelaide</a>
                                         <a href="#">Real estate Hobart</a>
                                         <a href="#">Real estate Canberra</a>
                                         <a href="#">Real estate Darwin</a>
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="widget-content-inner">
                                 <div class="gird-tab-search">
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate Adelaide</a>
                                         <a href="#">Real estate Hobart</a>
                                         <a href="#">Real estate Canberra</a>
                                         <a href="#">Real estate Darwin</a>
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="widget-content-inner">
                                 <div class="gird-tab-search">
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate Adelaide</a>
                                         <a href="#">Real estate Hobart</a>
                                         <a href="#">Real estate Canberra</a>
                                         <a href="#">Real estate Darwin</a>
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                 </div>
                             </div>
                             <div class="widget-content-inner">
                                 <div class="gird-tab-search">
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate Adelaide</a>
                                         <a href="#">Real estate Hobart</a>
                                         <a href="#">Real estate Canberra</a>
                                         <a href="#">Real estate Darwin</a>
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate NSW</a>
                                         <a href="#">Real estate VIC</a>
                                         <a href="#">Real estate QLD</a>
                                         <a href="#">Real estate WA</a>
                                         <a href="#">Real estate SA</a>
                                         <a href="#">Real estate TAS</a>
                                     </div>
                                     <div class="item">
                                         <a href="#">Real estate ACT</a>
                                         <a href="#">Real estate NT</a>
                                         <a href="#">Real estate Sydney</a>
                                         <a href="#">Real estate Melbourne</a>
                                         <a href="#">Real estate Brisbane</a>
                                         <a href="#">Real estate Perth</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
</div>
@section('page_scripts')
<script>
    $(function(){
        let debounceTimer;
        $("body").on('keyup','.filter_property_by_search',function(e){
            e.preventDefault();
            const url = "{{ route('filter.property.by.search') }}";
            const method = "POST";
            const search_term = $(this).val();
            debounceTimer = setTimeout(() => {
                if (search_term.trim() !== "") {
                    var formData = new FormData();
                    formData.append('search',search_term);
                    formData.append('type','sale');
                    CommonLib.ajaxForm(formData,method,url).then(d=>{
                        if(d.status === 200){
                            $(".show-filter-data").removeClass('d-none');
                            $(".show-filter-data").html(d.html);
                        }else{
                            $(".show-filter-data").addClass('d-none');
                        }
                    }).catch(e=>{
                        CommonLib.notification.error(e.responseJSON.errors);
                    });
                }
            }, 300);
        });
        $("body").on('keyup','.filter_property_by_search_for_rent',function(e){
            e.preventDefault();
            const url = "{{ route('filter.property.by.search') }}";
            const method = "POST";
            const search_term = $(this).val();
            debounceTimer = setTimeout(() => {
                if (search_term.trim() !== "") {
                    var formData = new FormData();
                    formData.append('search',search_term);
                    formData.append('type','rent');
                    CommonLib.ajaxForm(formData,method,url).then(d=>{
                        if(d.status === 200){
                            $(".show-filter-data-for-rent").removeClass('d-none');
                            $(".show-filter-data-for-rent").html(d.html);
                        }else{
                            $(".show-filter-data-for-rent").addClass('d-none');
                        }
                    }).catch(e=>{
                        CommonLib.notification.error(e.responseJSON.errors);
                    });
                }
            }, 300);
        });
    });
</script>
@endsection
@endsection
