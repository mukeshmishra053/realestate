<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/animation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/mmenu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/font/fonts.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/icon/flaticon_just-home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/icon/icomoon/style.css">
    <link rel="shortcut icon" href="{{ asset('/') }}frontend/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}frontend/style.css">
    @yield('page_styles')
</head>
<body class="body {{ (Request::segment(1) == '') ? 'counter-scroll' : '' }}">
    <!-- Preloader -->
        <div class="preload preload-container">
            <div class="middle"></div>
        </div>
        <div id="wrapper">
            <div id="page" class="home-1">
                @include('frontend.layout.header')
                    @yield('content')
                @include('frontend.layout.footer')
        <script src="{{ asset('/') }}frontend/js/jquery.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/jquery.nice-select.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/bootstrap.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/bootstrap-select.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/swiper-bundle.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/swiper.js"></script>
        <script src="{{ asset('/') }}frontend/js/countto.js"></script>
        <script src="{{ asset('/') }}frontend/js/circletype.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFC3m2n0jBRFTMvUNZc0-6Y0Rzlcadzcw"></script>
        <script src="{{ asset('/') }}frontend/js/maps.js"></script>
        <script src="{{ asset('/') }}frontend/js/marker.js"></script>
        <script src="{{ asset('/') }}frontend/js/infobox.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/magnific-popup.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/apexcharts.js"></script>
        <script src="{{ asset('/') }}frontend/js/area-chart.js"></script>
        <script src="{{ asset('/') }}frontend/js/morris.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/raphael.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/morris.js"></script>
        <script src="{{ asset('/') }}frontend/js/nouislider.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/rangle-slider.js"></script>
        <script src="{{ asset('/') }}frontend/js/mmenu.js"></script>
        <script src="{{ asset('/') }}frontend/js/wow.min.js"></script>
        <script src="{{ asset('/') }}frontend/js/scrollmagic.js"></script>
        <script src="{{ asset('/') }}frontend/js/main.js"></script>
        <script src="{{ asset('/') }}frontend/cute-alert.js"></script>
        <script src="{{ asset('/') }}frontend/js/CommonLib.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @yield('page_scripts')
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
                            CommonLib.ajaxForm(formData,method,url).then(d=>{
                                if(d.status === 200){
                                    $(".show-filter-data-header").removeClass('d-none');
                                    $(".show-filter-data-header").html(d.html);
                                }else{
                                    $(".show-filter-data-header").addClass('d-none');
                                }
                            }).catch(e=>{
                                CommonLib.notification.error(e.responseJSON.errors);
                            });
                        }
                    }, 300);
                });
                $("body").on('click','.master_filter_data li',function(e){
                    const sub_value = $(this).data('value');
                    $(this).parent('.master_filter_data').find('input[type="hidden"]').val(sub_value);
                });

                $("body").on("submit","#loginForm",function(e){
                    e.preventDefault();
                    const url = $(this).attr('action');
                    const method = $(this).attr('method');
                    const formData = new FormData($(this)[0]);
                    $(".text-danger").empty();
                    CommonLib.ajaxForm(formData,method,url,true).then(d=>{
                        if(!d.error){
                            CommonLib.notification.success(d.message);
                            setTimeout(function(){
                                window.location = "{{ route('public.account.dashboard') }}"
                            },2000);
                        }else{
                            CommonLib.notification.error(d.message);
                        }
                    }).catch(e=>{
                        if (e.status === 422) {
                            let errors = e.responseJSON.errors;
                            $.each(errors, function (field, messages) {
                                $(`#${field}`).html(messages[0]);
                            });
                        }
                    });
                });
                $("body").on("submit","#registerForm",function(e){
                    e.preventDefault();
                    const url = $(this).attr('action');
                    const method = $(this).attr('method');
                    const formData = new FormData($(this)[0]);
                    $(".text-danger").empty();
                    CommonLib.ajaxForm(formData,method,url,true).then(d=>{
                        if(!d.errors){
                            CommonLib.notification.success("Confirmation email sent to your registered email,Please check");
                            setTimeout(function(){
                                location.href = "{{ route('home') }}";
                            },2000);
                        }else{
                            CommonLib.notification.error(d.message);
                        }
                    }).catch(e=>{
                        if (e.status === 422) {
                            let errors = e.responseJSON.errors;
                            $.each(errors, function (field, messages) {
                                $(`#${field}s`).html(messages[0]);
                            });
                        }
                    });
                });
            });
        </script>
        <script>
        new Mmenu(document.querySelector("#menu"));
        </script>
      </body>
   </html>
