@extends('frontend.layout.master')
@section('title','Testimonials')
@section('content')
<div class="main-content">
    <!-- flat-title -->
    <div class="flat-title">
       <div class="cl-container full">
          <div class="row">
             <div class="col-12">
                <div class="content">
                   <h2>Testimonials</h2>
                   <ul class="breadcrumbs">
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li>/</li>
                      <li>Property List</li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <section class="tf-section flat-testimonial style-5 type-1">
       <div class="testimonials">
          <div class="cl-container">
             <div class="row justify-between">
                <div class="col-md-12">
                    <div class="testimonials-inner style-row">
                        <div>
                            <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">What our customers are <br> saying us?</h2>
                        </div>
                        <div class="list">
                            <div class="item wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                <h3>13m+</h3>
                                <p>Happy People</p>
                            </div>
                            <div class="item wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
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
                </div>
                @if(!empty($testimonials))
                    @foreach ($testimonials as $testimonial)
                        <div class="col-md-4">
                            <div class="swiper-slide">
                                <div class="testimonials-item background-white type-1 wow fadeInUp">
                                    <div class="head">
                                        <div class="image">
                                            @if($testimonial->image)
                                                <img src="frontend/images/person_14030925.svg" alt="person_14030925">
                                            @else
                                                <img src="{{ asset('/').'/'.$testimonial->image }}" alt="person_14030925">
                                            @endif
                                        </div>
                                        <div>
                                        <div class="title">
                                            <a href="#">{{ $testimonial->name }}</a>
                                        </div>
                                        <p>{{ $testimonial->company }}</p>
                                        </div>
                                    </div>
                                    <div class="description">{{ $testimonial->content }} </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
             </div>
          </div>
       </div>
    </section>
 </div>
@endsection
