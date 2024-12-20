@if (count($property->images) < 2)
    <div class="featured_slick_gallery">
        <div class="container">
            @foreach ($property->images as $index => $image)
                <div class="featured_slick_padd text-center">
                    <a href="{{ RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage()) }}"
                        class="mfp-gallery">
                        <img src="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}"
                            class="img-fluid mx-auto" alt="{{ $property->name }}-{{ $index }}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@else
    <div class="featured_slick_gallery-slide">
        @foreach ($property->images as $index => $image)
            <div class="featured_slick_padd">
                <a href="{{ RvMedia::getImageUrl($image, null, false, RvMedia::getDefaultImage()) }}"
                    class="mfp-gallery">
                    <img src="{{ RvMedia::getImageUrl($image, 'property_large', false, RvMedia::getDefaultImage()) }}"
                        class="img-fluid mx-auto" alt="{{ $property->name }}-{{ $index }}" />
                </a>
            </div>
        @endforeach
    </div>
@endif
