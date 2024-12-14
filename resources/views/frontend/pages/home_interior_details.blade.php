@extends('frontend.layout.master')
@section('title','Property Details')
@section('content')
@section('page_styles')
<style>
/* Default white color for stars */
.ratings .star {
    cursor: pointer;
    color: #ffffff; /* Default white color */
    font-size: 24px;
    transition: color 0.2s ease; /* Smooth color transition */
}

/* Highlight color for stars on hover and selection */
.ratings .star.active,
.ratings .star:hover,
.ratings .star:hover ~ .star {
    color: #FFD700; /* Gold color for active stars */
}

</style>
@endsection
<div class="main-content px-20">
    <!-- property-single-wrap -->
    <div class="property-single-wrap v7">
       <div class="page-top">
          <div class="cl-container">
             <div class="row">
                <div class="col-12">
                   <div class="flex items-center justify-between gap30 flex-wrap pt-30 pb-30">
                      <ul class="breadcrumbs style-1 justify-start">
                         <li><a href="{{ route('home') }}">Home</a></li>
                         <li>/</li>
                         <li>Property List</li>
                         <li>/</li>
                         <li>{{ $singleProperty->name }}</li>
                      </ul>
                      <div class="list-icons-page">
                         <div class="item">
                            <div class="icon">
                               <i class="flaticon-heart"></i>
                            </div>
                            <p>Save</p>
                         </div>
                         {{-- <div class="item">
                            <div class="icon">
                               <i class="flaticon-before-after"></i>
                            </div>
                            <p>Compare</p>
                         </div> --}}
                         <div class="item">
                            <div class="icon">
                               <i class="flaticon-outbox"></i>
                            </div>
                            <p>Share</p>
                         </div>
                         <div class="item">
                            <div class="icon">
                               <i class="flaticon-tools-and-utensils"></i>
                            </div>
                            <p>Print</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-12">
                   <div class="wrap-gallery-image">
                      <div class="list-tags type-1">
                        @if($singleProperty->type == 'sale')
                            <a href="#" class="tags-item for-sell">SALE</a>
                        @else
                            <a href="#" class="tags-item for-sell">RENT</a>
                        @endif
                        @if($singleProperty->is_featured == 1)
                            <a href="#" class="tags-item featured">Featured</a>
                        @endif
                      </div>
                        @if(isset($singleProperty->images[0]))
                            <a href="{{asset('/storage').'/'.$singleProperty->images[0]}}" class="item-1" data-fancybox="gallery">
                                <img src="{{asset('/storage').'/'.$singleProperty->images[0]}}" alt="">
                            </a>
                        @else
                            <a href="{{ asset('/').'frontend/images/slider/slider-properties-detail-1.jpg'}}" class="item-1" data-fancybox="gallery">
                                <img src="{{ asset('/').'frontend/images/slider/slider-properties-detail-1.jpg'}}" alt="">
                            </a>
                        @endif
                        @if(count($singleProperty->images) > 1)
                            @foreach($singleProperty->images as $key=>$img)
                                @if(!$loop->first)
                                    <a href="{{asset('/storage').'/'.$img}}" class="item-{{ $loop->iteration  }}" data-fancybox="gallery">
                                        <img src="{{asset('/storage').'/'.$img}}" alt="">
                                    </a>
                                @endif
                            @endforeach
                        @endif
                        <a href="#" class="more-photos" data-fancybox="gallery">
                            <i class="flaticon-gallery"></i>
                            <p>{{ count($singleProperty->images) }} Photos</p>
                        </a>
                   </div>
                </div>
                <div class="col-12">
                   <div class="box-items">
                      {{-- <div class="item wow fadeInUp">
                         <div class="icon">
                            <i class="flaticon-city"></i>
                         </div>
                         <div class="text-content">Multi Family</div>
                      </div> --}}
                      {{-- <div class="item wow fadeInUp" data-wow-delay="0.05s">
                         <div class="icon">
                            <i class="flaticon-hammer"></i>
                         </div>
                         <div class="text-content">Built in 1940</div>
                      </div> --}}
                      <div class="item wow fadeInUp" data-wow-delay="0.1s">
                         <div class="icon">
                            <i class="flaticon-minus-front"></i>
                         </div>
                         <div class="text-content">{{ $singleProperty->square }} Sq Ft</div>
                      </div>
                      <div class="item wow fadeInUp" data-wow-delay="0.15s">
                         <div class="icon">
                            <i class="flaticon-hotel"></i>
                         </div>
                         <div class="text-content">{{ $singleProperty->number_bedroom }} Bedrooms</div>
                      </div>
                      <div class="item wow fadeInUp" data-wow-delay="0.2s">
                         <div class="icon">
                            <i class="flaticon-bath-tub"></i>
                         </div>
                         <div class="text-content">{{ $singleProperty->number_bathroom }} Bathrooms</div>
                      </div>
                      {{-- <div class="item wow fadeInUp" data-wow-delay="0.25s">
                         <div class="icon">
                            <i class="flaticon-garage"></i>
                         </div>
                         <div class="text-content">1 Garage</div>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="cl-container">
          <div class="row">
             <div class="col-xl-6">
                <div class="content-wrap">
                   <div class="desc">
                      <h4 class="wow fadeInUp">Description</h4>
                      <p class="wow fadeInUp">
                        {!! $singleProperty->content !!}
                      </p>
                   </div>
                   <div class="address">
                      {{-- <div class="flex items-center justify-between gap30 flex-wrap wow fadeInUp">
                         <h4 class="mb-0">Address</h4>
                         <a href="#" class="tf-button-green"><i class="flaticon-location"></i>Open On Google Maps</a>
                      </div> --}}
                      <div class="list-item">
                         <div class="item wow fadeInUp">
                            <div class="text">Address</div>
                            <p>{!! $singleProperty->address !!}</p>
                         </div>
                         {{-- <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Zip/Postal Code</div>
                            <p>90034</p>
                         </div> --}}
                         <div class="item wow fadeInUp">
                            <div class="text">City</div>
                            <p>{{ $singleProperty->cityName }}</p>
                         </div>
                         {{-- <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Area</div>
                            <p>Brookside</p>
                         </div> --}}
                         {{-- <div class="item wow fadeInUp">
                            <div class="text">State/county</div>
                            <p>California</p>
                         </div>
                         <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Country</div>
                            <p>United States</p>
                         </div> --}}
                      </div>
                   </div>
                   {{-- <div class="attachments">
                      <h4 class="wow fadeInUp">Property Attachments</h4>
                      <div class="wrap-file-item wow fadeInUp">
                         <a href="#" class="file-item">
                            <div class="icon">
                               <img src="{{ asset('/') }}frontend/images/image-box/file-pdf.svg" alt="">
                            </div>
                            <div>
                               <div class="name">Ultra-Demo-PDF File</div>
                               <div class="size">140.56 kb</div>
                            </div>
                         </a>
                         <a href="#" class="file-item">
                            <div class="icon">
                               <img src="{{ asset('/') }}frontend/images/image-box/file-pdf.svg" alt="">
                            </div>
                            <div>
                               <div class="name">Ultra-Demo-PDF File</div>
                               <div class="size">140.56 kb</div>
                            </div>
                         </a>
                      </div>
                   </div> --}}
                   <div class="details">
                      <h4 class="wow fadeInUp">Details</h4>
                      <div class="list-item">
                         <div class="item wow fadeInUp">
                            <div class="text">Property ID:</div>
                            <p>{{ $singleProperty->id }}</p>
                         </div>
                         {{-- <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Garage:</div>
                            <p>1</p>
                         </div> --}}
                         <div class="item wow fadeInUp">
                            <div class="text">Price:</div>
                            <p>₹ {{ number_format($singleProperty->price,2) }}</p>
                         </div>
                         {{-- <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Garage Size:</div>
                            <p>{{ $singleProperty->square }} SqFt</p>
                         </div> --}}
                         <div class="item wow fadeInUp">
                            <div class="text">Property Size:</div>
                            <p>{{ $singleProperty->square }} Sq Ft</p>
                         </div>
                         {{-- <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Year Built:</div>
                            <p>2024</p>
                         </div> --}}
                         <div class="item wow fadeInUp">
                            <div class="text">Bedrooms:</div>
                            <p>{{ $singleProperty->number_bedroom }}</p>
                         </div>
                         <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Property Type:</div>
                            <p>{{ $singleProperty->category }}</p>
                         </div>
                         <div class="item wow fadeInUp">
                            <div class="text">Bathrooms:</div>
                            <p>{{ $singleProperty->number_bathroom }}</p>
                         </div>
                         <div class="item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="text">Property Status:</div>
                            <p>For {{ $singleProperty->type }}</p>
                         </div>
                      </div>
                   </div>
                   {{-- <div class="energy">
                      <h4 class="wow fadeInUp">Energy Class</h4>
                      <ul>
                         <li class="wow fadeInUp">
                            <div class="title">Energetic class:</div>
                            <p>A+</p>
                         </li>
                         <li class="wow fadeInUp">
                            <div class="title">Global Energy Performance Index:</div>
                            <p>92.42 kWh / m²a</p>
                         </li>
                         <li class="wow fadeInUp">
                            <div class="title">Renewable energy performance index:</div>
                            <p>00.00 kWh / m²a</p>
                         </li>
                         <li class="wow fadeInUp">
                            <div class="title">Energy performance of the building:</div>
                            <p>50</p>
                         </li>
                         <li class="wow fadeInUp">
                            <div class="title">EPC Current Rating:</div>
                            <p>92</p>
                         </li>
                         <li class="wow fadeInUp">
                            <div class="title">EPC Potential Rating:</div>
                            <p>80</p>
                         </li>
                      </ul>
                      <img src="{{ asset('/') }}frontend/images/image-box/energy.png" alt="">
                   </div> --}}
                   @if(!empty($singleProperty->facilities))
                   <div class="features">
                      <h4 class="wow fadeInUp">Facts & Features</h4>
                      <p class="wow fadeInUp">Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                      <ul>
                         <li>
                            <h5 class="wow fadeInUp">Features</h5>
                            <div class="wrap-check-ellipse wow fadeInUp" data-wow-delay="0.1s">

                            @foreach($singleProperty->facilities as $facility)

                                <div class="check-ellipse-item">
                                    <div class="icon">
                                    <i class="flaticon-check"></i>
                                    </div>
                                    <p>{{ $facility->name }}</p>
                                </div>
                            @endforeach
                            </div>
                         </li>

                    @endif
                      </ul>
                   </div>
                   {{-- <div class="page-views">
                      <h4 class="wow fadeInUp">Property Views</h4>
                      <div class="area-chart">
                         <div id="line-chart-5"></div>
                      </div>
                   </div> --}}
                   <div class="reviews-wrap">
                      <div class="flex justify-between items-center mb-40 wow fadeInUp">
                         <h4 class="mb-0">{{ $singleProperty->reviews->count()}} Reviews</h4>
                         <a href="#" class="tf-button-green">Leave a Review</a>
                      </div>
                      @if(!empty($singleProperty->reviews))
                        <ul>
                            @foreach($singleProperty->reviews as $reviews)
                            <li class="wow fadeInUp">
                                <div class="image">
                                <img src="{{ asset('/') }}frontend/images/author/author-5.png" alt="">
                                </div>
                                <div class="content">
                                <div class="ratings">
                                    @for ($i=0;$i<ceil($reviews->star);$i++)
                                        <i class="flaticon-star-1"></i>
                                    @endfor
                                </div>
                                <div class="name">
                                    <a href="#">{{ $reviews->author->name }}</a>
                                </div>
                                <div class="time">{{ $reviews->created_at->format('F d, Y h:i A') }}</div>
                                <p>{{ $reviews->content }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                      @endif
                   </div>
                   <div class="leave-a-review">
                      <h4 class="wow fadeInUp">Leave A Review</h4>
                      <p class="wow fadeInUp">Your email address will not be published. Required fields are marked *</p>

                      <form class="form-comment all-form" action="{{ route('submit.review') }}" method="POST">
                        @csrf
                            <input type="hidden" name="review_type" class="account_id" value="property">
                            <input type="hidden" name="reviewable_id" class="reviewable_id" value="{{ $singleProperty->id }}">
                            <div>
                                <p class="wow fadeInUp">Your Rating *</p>
                                <div class="ratings wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <input type="hidden" name="star" class="rating">
                                <input type="hidden" name="account_id" class="account_id" value="1">
                                <!-- Dynamically set stars with hover and click -->
                                <span class="star" data-value="1"><i class="flaticon-star"></i></span>
                                <span class="star" data-value="2"><i class="flaticon-star"></i></span>
                                <span class="star" data-value="3"><i class="flaticon-star"></i></span>
                                <span class="star" data-value="4"><i class="flaticon-star"></i></span>
                                <span class="star" data-value="5"><i class="flaticon-star"></i></span>
                            </div>
                            <p id="star" class="text-danger"></p>
                            </div>
                         <fieldset class="message wow fadeInUp has-top-title">
                            <textarea name="content" rows="4" placeholder="Your Comment" class="" tabindex="2" aria-required="true"></textarea>
                            <label for="">Your Comment</label>
                            <p id="content" class="text-danger"></p>
                         </fieldset>
                         <div class="checkbox-item wow fadeInUp">
                            <label>
                               <p>Save my name, email, and website in this browser for the next time I comment.</p>
                               <input type="checkbox" name="terms">
                               <span class="btn-checkbox"></span>
                            </label>
                            <p id="terms" class="text-danger"></p>
                         </div>
                         <div class="button-submit wow fadeInUp">
                            <button class="tf-button-primary" type="submit">Submit Review <i class="icon-arrow-right-add"></i></button>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
             <div class="col-xl-6">
                <div class="content-wrap">
                   {{-- <div class="schedule">
                      <h4 class="wow fadeInUp">Schedule a tour</h4>
                      <form class="form-schedule">
                         <div class="cols">
                            <fieldset class="message">
                               <input type="date" name="date" value="2023-11-20">
                            </fieldset>
                            <div class="nice-select" tabindex="0">
                               <span class="current">Please Select Time</span>
                               <ul class="list">
                                  <li data-value class="option selected">6 AM</li>
                                  <li data-value="For Ren" class="option">12 AM</li>
                                  <li data-value="Sold" class="option">6 PM</li>
                               </ul>
                            </div>
                         </div>
                         <div class="widget-tabs style-4">
                            <ul class="widget-menu-tab">
                               <li class="item-title active">
                                  <span class="inner">In Person</span>
                               </li>
                               <li class="item-title">
                                  <span class="inner">Video Chat</span>
                               </li>
                            </ul>
                            <div class="widget-content-tab">
                               <div class="widget-content-inner active">
                                  <div class="cols">
                                     <fieldset class="name has-top-title">
                                        <input type="text" placeholder="Name" class="" name="text" tabindex="2" value=" " aria-required="true" required="">
                                        <label for="">Name</label>
                                     </fieldset>
                                     <fieldset class="phone has-top-title">
                                        <input type="number" placeholder="Phone" class="" name="number" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Phone</label>
                                     </fieldset>
                                     <fieldset class="email has-top-title">
                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Email</label>
                                     </fieldset>
                                  </div>
                                  <fieldset class="message has-top-title">
                                     <textarea name="message" rows="4" placeholder="Your Comment" class="" tabindex="2" aria-required="true" required=""> </textarea>
                                     <label for="">Your Comment</label>
                                  </fieldset>
                               </div>
                               <div class="widget-content-inner">
                                  <div class="cols">
                                     <fieldset class="name has-top-title">
                                        <input type="text" placeholder="Name" class="" name="text" tabindex="2" value=" " aria-required="true" required="">
                                        <label for="">Name</label>
                                     </fieldset>
                                     <fieldset class="phone has-top-title">
                                        <input type="number" placeholder="Phone" class="" name="number" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Phone</label>
                                     </fieldset>
                                     <fieldset class="email has-top-title">
                                        <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                                        <label for="">Email</label>
                                     </fieldset>
                                  </div>
                                  <fieldset class="message has-top-title">
                                     <textarea name="message" rows="4" placeholder="Your Comment" class="" tabindex="2" aria-required="true" required=""> </textarea>
                                     <label for="">Your Comment</label>
                                  </fieldset>
                               </div>
                            </div>
                         </div>
                         <div class="button-submit">
                            <button class="tf-button-primary w-full" type="submit">Submit a Tour Request<i class="icon-arrow-right-add"></i></button>
                         </div>
                      </form>
                   </div> --}}
                   <div class="contact-info">
                      <div class="flex items-center justify-between gap30 flex-wrap wow fadeInUp">
                         <h4 class="mb-0">Contact Information</h4>
                         <a href="#" class="tf-button-green">View Listing</a>
                      </div>
                      <div class="person wow fadeInUp">
                         <div class="image">
                            <img src="{{ asset('/') }}frontend/images/sidebar/agent-1.png" alt="">
                         </div>
                         <div class="content">
                            <div class="name">
                               <a href="#">{{ $singleProperty->author->first_name }}.</a>
                            </div>
                            <p>{{ $singleProperty->author->email }}</p>
                            <p>{{ $singleProperty->author->phone }}</p>
                         </div>
                      </div>
                      <div class="title wow fadeInUp">Enquire About This Property</div>
                      <form class="form-comment" id="consultForm" method="POST" action="{{ route('save.consultant') }}">
                        @csrf
                        <div class="cols">
                            <fieldset class="name wow fadeInUp has-top-title">
                               <input type="text" placeholder="Name" class="" name="name" tabindex="2" value="" aria-required="true">
                               <input type="hidden"  name="property_id" tabindex="2" value="{{ $singleProperty->id }}" aria-required="true">
                               <input type="hidden"  name="property_type" tabindex="2" value="property" aria-required="true">
                               <label for="">Name</label>
                               <p id="names" class="text-danger"></p>
                            </fieldset>
                            <fieldset class="phone wow fadeInUp has-top-title" data-wow-delay="0.1s">
                               <input type="number" placeholder="Phone" class="" name="phone" tabindex="2" value="" aria-required="true">
                               <label for="">Phone</label>
                               <p class="text-danger" id="phones"></p>
                            </fieldset>
                         </div>
                         <fieldset class="email wow fadeInUp has-top-title">
                            <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true">
                            <label for="">Email</label>
                            <p id="emails" class="text-danger"></p>
                         </fieldset>
                         <fieldset class="message wow fadeInUp has-top-title">
                            <textarea name="content" rows="4" placeholder="Message" class="" tabindex="2" aria-required="true"></textarea>
                            <label for="">Message</label>
                            <p id="contents" class="text-danger"></p>
                         </fieldset>
                         <div class="checkbox-item wow fadeInUp">
                            <label>
                               <p>By submitting this form I agree to<span>Terms of Use</span></p>
                               <input type="checkbox" name="terms">
                               <span class="btn-checkbox"></span>
                            </label>
                            <p id="termss" class="text-danger"></p>
                         </div>
                         <div class="button-submit wow fadeInUp">
                            <button class="tf-button-primary" type="submit">Request Information<i class="icon-arrow-right-add"></i></button>
                         </div>
                      </form>
                   </div>
                   {{-- <div class="plans">
                      <h4 class="wow fadeInUp">Floor Plans</h4>
                      <div class="widget-tabs style-3">
                         <ul class="widget-menu-tab wow fadeInUp">
                            <li class="item-title active">
                               <span class="inner">First Floor</span>
                            </li>
                            <li class="item-title">
                               <span class="inner">Second Floor</span>
                            </li>
                            <li class="item-title">
                               <span class="inner">Third Floor</span>
                            </li>
                         </ul>
                         <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                               <div class="icons">
                                  <div class="item wow fadeInUp">
                                     <i class="flaticon-hotel"></i>
                                     <div class="text">Bedrooms</div>
                                     <p>4</p>
                                  </div>
                                  <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                     <i class="flaticon-bath-tub"></i>
                                     <div class="text">Bathrooms</div>
                                     <p>2</p>
                                  </div>
                                  <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                     <i class="flaticon-minus-front"></i>
                                     <div class="text">Size</div>
                                     <p>200 SqFt</p>
                                  </div>
                                  <div class="item wow fadeInUp" data-wow-delay="0.3s">
                                     <i class="flaticon-tag"></i>
                                     <div class="text">Price</div>
                                     <p>$12.000</p>
                                  </div>
                               </div>
                               <p class="wow fadeInUp">Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                               <img src="{{ asset('/') }}frontend/images/section/blueprint-1.png" alt="">
                            </div>
                            <div class="widget-content-inner">
                               <div class="icons">
                                  <div class="item">
                                     <i class="flaticon-hotel"></i>
                                     <div class="text">Bedrooms</div>
                                     <p>4</p>
                                  </div>
                                  <div class="item">
                                     <i class="flaticon-bath-tub"></i>
                                     <div class="text">Bathrooms</div>
                                     <p>2</p>
                                  </div>
                                  <div class="item">
                                     <i class="flaticon-minus-front"></i>
                                     <div class="text">Size</div>
                                     <p>200 SqFt</p>
                                  </div>
                                  <div class="item">
                                     <i class="flaticon-tag"></i>
                                     <div class="text">Price</div>
                                     <p>$12.000</p>
                                  </div>
                               </div>
                               <p>Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                               <img src="{{ asset('/') }}frontend/images/section/blueprint-1.png" alt="">
                            </div>
                            <div class="widget-content-inner">
                               <div class="icons">
                                  <div class="item">
                                     <i class="flaticon-hotel"></i>
                                     <div class="text">Bedrooms</div>
                                     <p>4</p>
                                  </div>
                                  <div class="item">
                                     <i class="flaticon-bath-tub"></i>
                                     <div class="text">Bathrooms</div>
                                     <p>2</p>
                                  </div>
                                  <div class="item">
                                     <i class="flaticon-minus-front"></i>
                                     <div class="text">Size</div>
                                     <p>200 SqFt</p>
                                  </div>
                                  <div class="item">
                                     <i class="flaticon-tag"></i>
                                     <div class="text">Price</div>
                                     <p>$12.000</p>
                                  </div>
                               </div>
                               <p>Lorem ipsum dolor sit amet, homero debitis temporibus in mei, at sit voluptua antiopam hendrerit. Lorem epicuri eu per. Mediocrem torquatos deseruisse te eum commodo.</p>
                               <img src="{{ asset('/') }}frontend/images/section/blueprint-1.png" alt="">
                            </div>
                         </div>
                      </div>
                   </div> --}}

                   <div class="video">
                      <h4 class="wow fadeInUp">Video</h4>
                      <div class="video-wrap">
                         <img src="{{ asset('/') }}frontend/images/image-box/video-2.jpg" alt="">
                         <a href="https://www.youtube.com/watch?v=MLpWrANjFbI" class="popup-youtube">
                            <div class="icon">
                               <i class="flaticon-play"></i>
                            </div>
                         </a>
                      </div>
                   </div>
                   <div class="map">
                      <h4 class="wow fadeInUp">Map</h4>
                      <div class="wrap-map-v1">
                        <iframe
                            width="100%"
                            height="500px"
                            style="border:0;"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?q={{ urlencode($singleProperty->location) }}">
                        </iframe>
                      </div>
                   </div>
                   {{-- <div class="tour">
                      <h4 class="wow fadeInUp">360° Virtual Tour</h4>
                      <div class="image">
                         <img src="{{ asset('/') }}frontend/images/image-box/img-virtual-1.jpg" alt="">
                      </div>
                   </div> --}}
                   {{-- <div class="walk-score">
                      <h4 class="wow fadeInUp">Walk Score</h4>
                      <div class="wrap-walk-score">
                         <div class="walk-score-item wow fadeInUp">
                            <div class="icon">
                               <i class="flaticon-walk"></i>
                            </div>
                            <div>
                               <div class="title">Walk Score®</div>
                               <p>96 / 100</p>
                               <p>Walker's Paradise</p>
                            </div>
                         </div>
                         <div class="walk-score-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="icon">
                               <i class="flaticon-bike"></i>
                            </div>
                            <div>
                               <div class="title">Bike Score®</div>
                               <p>96 / 100</p>
                               <p>Bikeable</p>
                            </div>
                         </div>
                      </div>
                   </div> --}}
                   <div class="nearby">
                      <h4 class="wow fadeInUp">What's Nearby?</h4>
                      <div class="widget-tabs style-2 type-small">
                         <ul class="widget-menu-tab wow fadeInUp">
                            @if(!empty($singleProperty->facilities))
                                @foreach($singleProperty->facilities as $facility)
                                    <li class="item-title {{ ($loop->first) ? 'active' : ''}}">
                                    <span class="inner">{{ $facility->name }}</span>
                                    </li>
                                @endforeach
                            @endif
                         </ul>
                         <div class="widget-content-tab">
                            @if(!empty($singleProperty->facilities))
                                @foreach($singleProperty->facilities as $faci)
                                    <div class="widget-content-inner {{ ($loop->first) ? 'active' : ''}}">
                                        <div class="wrap-nearby">
                                            <div class="nearby-item wow fadeInUp">
                                                {{-- <div class="number">
                                                    <h4>9<span>/10</span></h4>
                                                </div> --}}
                                                <div>
                                                    {{-- <div class="title">Ps 95 Eastwood</div> --}}
                                                    <div class="flex items-center gap15">
                                                    {{-- <p>Grades: <span>K-5</span></p> --}}
                                                    <p>Distance: <span>{{ $faci->pivot->distance }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- /property-single-wrap -->
 </div>
@section('page_scripts')
<script>
   $(document).ready(function () {
        const $stars = $(".ratings .star");
        // On star click
        $stars.on("click", function () {
            const clickedValue = $(this).data("value");
            $(".ratings").find('input[name="star"]').val(clickedValue);
            $stars.each(function () {
                $(this).find('i').removeClass("flaticon-star-1").addClass("flaticon-star");
            });
            $stars.each(function () {
                if ($(this).data("value") <= clickedValue) {
                    $(this).find('i').removeClass("flaticon-star").addClass("flaticon-star-1");
                }
            });
        });
        $("body").on('submit','.all-form',function(e){
            e.preventDefault();
            const url = $(this).attr('action');
            const method = $(this).attr('method');
            var formData = new FormData($(this)[0]);
            CommonLib.ajaxForm(formData,method,url).then(d=>{
                console.log(d)
                if(d.status === 200){
                    console.log(d.msg)
                    CommonLib.notification.success(d.msg);
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }else{
                    CommonLib.notification.error(d.msg);
                }
            }).catch(e=>{
                console.log("e",e.responseJSON)
                if (e.status === 422) {
                    console.log("e",e.status)
                    let errors = e.responseJSON.errors;
                    $.each(errors, function (field, messages) {
                        console.log("field",field)
                        console.log("messages",messages)
                        $(`#${field}`).html(messages[0]);
                    });
                }
            });
        });
        $("body").on('submit','#consultForm',function(e){
            e.preventDefault();
            const url = $(this).attr('action');
            const method = $(this).attr('method');
            var formData = new FormData($(this)[0]);
            $('.text-danger').empty();
            CommonLib.ajaxForm(formData,method,url).then(d=>{
                console.log(d)
                if(d.status === 200){
                    console.log(d.msg)
                    CommonLib.notification.success(d.msg);
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }else{
                    CommonLib.notification.error(d.msg);
                }
            }).catch(e=>{
                console.log("e",e.responseJSON)
                if (e.status === 422) {
                    console.log("e",e.status)
                    let errors = e.responseJSON.errors;
                    $.each(errors, function (field, messages) {
                        console.log("field",field)
                        console.log("messages",messages)
                        $(`#${field}s`).html(messages[0]);
                    });
                }
            });
        });
    });


</script>
@endsection
@endsection
