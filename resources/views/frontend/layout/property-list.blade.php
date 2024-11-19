@if(!empty($properties))
    @foreach($properties as $property)
        <div class="list">
            <div class="box-dream style-row wow fadeInUp">
                <div class="image">
                    <div class="list-tags">
                        @if($property->moderation_status == 'approved')
                            <a href="#" class="tags-item for-sell">Verified</a>
                        @else
                            <a href="#" class="tags-item for-sell">Unverified</a>
                        @endif
                        @if($property->is_featured == 1)
                            <a href="#" class="tags-item featured">Featured</a>
                        @endif
                    </div>
                    <div class="button-heart" data-bs-toggle="modal" data-bs-target="#logoAfte">
                        <i class="flaticon-heart-1"></i>
                    </div>
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
                        <div class="price">{{ $property->category->name }}</div>
                        <div class="title">
                            <a href="{{ url('/get-detail-property').'/'.$property->id }}">{{ $property->name }} </a>
                            <p class="tupleNew__propType"><i class="flaticon-location"></i> <span class="tupleNew__bOld">{{ $property->name }} </span> in {{ $property->location }}</p>
                            <div class="icon-box">
                                @if($property->type == 'rent')
                                    <div class="item">
                                        <p>₹ {{ number_format($property->price,2) }}  / {{ $property->period }}</p>
                                    </div>
                                @else
                                    <div class="item">
                                        <p>₹ {{ number_format($property->price,2) }} </p>
                                    </div>
                                @endif
                                <div class="item">
                                    <p>{{ $property->squareText }} <br>Super Built-up Area </p>
                                </div>
                                <div class="item">
                                    <p>{{ $property->number_bedroom }} BHK  <br>{{ $property->number_bathroom }} Bath </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(!empty($property->facilities))
                        <p>Highlights &nbsp;
                            @foreach($property->facilities as $facility)
                                <span class="badge bg-secondary custBavger">{{ $facility->name }}  ({{ $facility->pivot->distance }})</span>
                            @endforeach
                        </p>
                    @endif
                    <p>{{ $property->descriptionText }} <a class="text-primary" href="#!">Read more</a> </p>
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
@endif
