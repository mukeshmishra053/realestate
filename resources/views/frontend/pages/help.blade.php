@extends('frontend.layout.master')
@section('title','Help')
@section('content')
<div class="main-content spacing-20">

    <!-- flat-title -->
    <section class="flat-title inner-page">
       <div class="cl-container full">
          <div class="row">
                <div class="col-12">
                   <div class="content">
                      <h2>Help</h2>
                      <div class="text">Help ansd Support</div>
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
                   <h2 class="wow fadeInUp">Drop your enquiry</h2>
                   <div class="text wow fadeInUp">We will be in touch with you shortly</div>
                </div>
             </div>
          </div>
          <div class="row justify-center">
             <div class="col-xxl-8">
                <form class="form-send-message" id="enquiryForm" action="{{ route('save.help') }}" method="POST">
                    @csrf
                   <div class="cols">
                      <fieldset class="name wow fadeInUp has-top-title">
                         <input type="text" placeholder="Name" name="name" class="is-invalid" tabindex="2" value=" " aria-required="true">
                         <p id="names" class="text-danger"></p>
                         <label for="">Name</label>
                      </fieldset>
                      <fieldset class="name wow fadeInUp has-top-title">
                         <input type="text" placeholder="Phone Number" name="phone" class="" tabindex="2" value=" " aria-required="true">
                         <p id="phones" class="text-danger"></p>
                         <label for="">Phone Number</label>
                      </fieldset>
                   </div>
                   <fieldset class="name wow fadeInUp has-top-title">
                         <input type="text" placeholder="Email Address" name="email" class="" tabindex="2" value=" " aria-required="true">
                         <p id="emails" class="text-danger"></p>
                         <label for="">Email Address</label>
                    </fieldset>
                   <fieldset class="name wow fadeInUp has-top-title">
                         <select name="property_type" id="" class="form-control">
                            <option value="">----Select-----</option>
                            @if(!empty($realEstateCategories))
                                @foreach($realEstateCategories as $real)
                                    <option value="{{ $real->id }}">{{ $real->name }}</option>
                                @endforeach
                            @endif
                         </select>
                         <p id="property_types" class="text-danger"></p>
                         <label for="">Property you are looking for</label>
                    </fieldset>
                   <fieldset class="message wow fadeInUp has-top-title">
                      <textarea name="enquiry_message" rows="4" placeholder="Enquiry Message" class="" tabindex="2" aria-required="true"> </textarea>
                      <p id="enquiry_messages" class="text-danger"></p>
                      <label for="">Enquiry Message</label>
                   </fieldset>
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
@section('page_scripts')
<script>
    $("body").on('submit','#enquiryForm',function(e){
        e.preventDefault();
        const url = $(this).attr('action');
        const method = $(this).attr('method');
        var formData = new FormData($(this)[0]);
        CommonLib.ajaxForm(formData,method,url).then(d=>{
            if(d.status === 200){
                CommonLib.notification.success(d.msg);
                setTimeout(() => {
                    location.reload();
                }, 2000);
            }else{
                CommonLib.notification.error(d.msg);
            }
        }).catch(e=>{
            if (e.status === 422) {
                console.log("e",e.status)
                let errors = e.responseJSON.errors;
                $.each(errors, function (field, messages) {
                    $(`#${field}s`).html(messages[0]);
                });
            }
        });
    });
</script>
@endsection
@endsection
