@extends('frontend.layout.master')
@section('title','Projects')
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
                      <li>Project List</li>
                   </ul>
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
             <div class="col-lg-12">
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

                @if(!$projectsList->isEmpty())
                <div class="show-filter-datasssss">
                        @foreach($projectsList as $project)
                            <div class="list">
                                <div class="box-dream style-row wow fadeInUp">
                                    <div class="image">
                                        <div class="list-tags">
                                            @if($project->is_featured == 1)
                                                <a href="#" class="tags-item featured">Featured</a>
                                            @endif
                                        </div>
                                        <div class="button-heart" data-bs-toggle="modal" data-bs-target="#logoAfte">
                                            <i class="flaticon-heart-1"></i>
                                        </div>
                                        <div class="swiper-container slider-box-dream arrow-style-1 pagination-style-1">
                                            <div class="swiper-wrapper">
                                                @if(!empty($project->images))
                                                    @foreach($project->images as $img)
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
                                            <div class="price">{{ $project->category->name }}</div>
                                            <div class="title">
                                                <a href="{{ url('/get-detail-property').'/'.$project->id }}">{{ $project->name }} </a>
                                                <p class="tupleNew__propType"><i class="flaticon-location"></i> <span class="tupleNew__bOld">{{ $project->name }} </span> in {{ $project->location }}</p>
                                                <div class="icon-box">
                                                    <div class="item">
                                                        <p>₹ {{ number_format($project->price_from,2) }}  -  ₹ {{ number_format($project->price_to,2) }}</p>
                                                    </div>
                                                    <div class="item">
                                                        <p>{{ $project->number_flat }} <br>Total Flats </p>
                                                    </div>
                                                    <div class="item">
                                                        <p>{{ $project->number_floor }} Floors  <br>{{ $project->number_block }} Block </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @if(!empty($property->facilities))
                                            <p>Highlights &nbsp;
                                                @foreach($property->facilities as $facility)
                                                    <span class="badge bg-secondary custBavger">{{ $facility->name }}  ({{ $facility->pivot->distance }})</span>
                                                @endforeach
                                            </p>
                                        @endif --}}
                                        <p>{{ $project->description }} <a class="text-primary" href="#!">Read more</a> </p>
                                        <div class="bot sdss">
                                            <a href="#!" data-bs-toggle="modal" data-bs-target="#modalloginsss" class="tf-button-no-bg buttoPath">
                                                View Number
                                            </a>
                                            <a href="#!" class="tf-button-no-bg buttoPathtwo" data-bs-toggle="modal" data-bs-target="#modalloginsss">
                                                <i class="fa fa-phone"></i>   Contact
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                <div>
                <div class="pagination-wrapper">
                    {{
                        $projectsList->links()
                    }}
                </div>
                @else
                    No data found
                @endif
             </div>
          </div>


       </div>
    </div>
    <!-- /property-grid -->
 </div>

@endsection
