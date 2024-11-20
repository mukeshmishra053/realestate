@extends('frontend.layout.master')
@section('title','About Us')
@section('content')
<div class="main-content px-20">
    <div class="flat-title agency-single">
       <div class="cl-container full">
          <div class="row">
             <div class="col-12">
                <div class="content">
                   <h2>About Us</h2>
                   <ul class="breadcrumbs">
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <section class="slider home2">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <h2 class="smaefonts">About Us</h2>
                {!! $aboutUsData->content !!}
             </div>
          </div>
       </div>
    </section>
    <!-- /best-properties -->
 </div>
@endsection
