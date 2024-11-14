@extends('frontend.layout.master')
@section('title','Home')
@section('content')
<div class="main-content spacing-20">

    <!-- flat-title -->
    <section class="flat-title inner-page">
       <div class="cl-container full">
          <div class="row">
                <div class="col-12">
                   <div class="content">
                      <h2>Contact Us</h2>
                      <div class="text">Based on your view history</div>
                   </div>
                </div>
          </div>
       </div>
    </section>
    <!-- send-message -->
    <section class="tf-section send-message">
       <div class="cl-container">
          <div class="row">
             <div class="col-12">
                <div class="heading-section text-center">
                   <h2 class="wow fadeInUp">Send Us a Message</h2>
                   <div class="text wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>
             </div>
          </div>
          <div class="row justify-center">
             <div class="col-xxl-8">
                <form class="form-send-message">
                   <div class="cols">
                      <fieldset class="name wow fadeInUp has-top-title">
                         <input type="text" placeholder="Name" class="" name="text" tabindex="2" value=" " aria-required="true" required="">
                         <label for="">Name</label>
                      </fieldset>
                      <fieldset class="name wow fadeInUp has-top-title">
                         <input type="text" placeholder="Name" class="" name="text" tabindex="2" value=" " aria-required="true" required="">
                         <label for="">Phone Number</label>
                      </fieldset>
                   </div>
                   <fieldset class="name wow fadeInUp has-top-title">
                         <input type="text" placeholder="Name" class="" name="text" tabindex="2" value=" " aria-required="true" required="">
                         <label for="">Email Address</label>
                      </fieldset>
                   <fieldset class="message wow fadeInUp has-top-title">
                      <textarea name="message" rows="4" placeholder="Your Message" class="" tabindex="2" aria-required="true" required=""> </textarea>
                      <label for="">Your Message</label>
                   </fieldset>
                   <div class="checkbox-item wow fadeInUp">
                      <label>
                         <p>I consent to having this website store my submitted information</p>
                         <input type="checkbox">
                         <span class="btn-checkbox"></span>
                      </label>
                   </div>
                   <div class="button-submit wow fadeInUp">
                      <button class="tf-button-primary w-full" type="submit">Send Message<i class="icon-arrow-right-add"></i></button>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </section>
    <!-- /send-message -->
    <!-- flat-partner -->
    <section class="tf-section flat-partner style-1 pt-0">
       <div class="cl-container">
          <div class="row">
             <div class="col-12">
                <div class="heading-section text-center">
                   <div class="text wow fadeInUp">Thousands of world’s leading companies trust Space</div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-12">
                <div class="flat-brand">
                   <div class="swiper-container slider-brand">
                      <div class="swiper-wrapper">
                         <div class="swiper-slide">
                            <div class="slogan-logo">
                               <a href="#">
                               <img src="frontend/images/image-box/brand-1.png" alt="images">
                               </a>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="slogan-logo">
                               <a href="#">
                               <img src="frontend/images/image-box/brand-2.png" alt="images">
                               </a>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="slogan-logo">
                               <a href="#">
                               <img src="frontend/images/image-box/brand-3.png" alt="images">
                               </a>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="slogan-logo">
                               <a href="#">
                               <img src="frontend/images/image-box/brand-4.png" alt="images">
                               </a>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="slogan-logo">
                               <a href="#">
                               <img src="frontend/images/image-box/brand-5.png" alt="images">
                               </a>
                            </div>
                         </div>
                         <div class="swiper-slide">
                            <div class="slogan-logo">
                               <a href="#">
                               <img src="frontend/images/image-box/brand-6.png" alt="images">
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
    <!-- /flat-partner -->
    <!-- account-bar -->
    <section class="account-bar">
       <div class="cl-container">
          <div class="row">
             <div class="col-12">
                <div class="flex justify-between items-center flex-wrap gap15">
                   <div>
                      <h3 class="wow fadeInUp">Become a Real Estate Agent</h3>
                      <div class="text wow fadeInUp">We only work with the best companies around the globe</div>
                   </div>
                   <a href="#!" class="tf-button-primary wow fadeInUp">Post Property<i class="icon-arrow-right-add"></i></a>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /account-bar -->
 </div>
@endsection
