<div>
    <div class="grid-3-cols mb-20">
        @if(!empty($citiesList))
            <div class="nice-select" tabindex="0">
                <span class="current">City</span>
                <ul class="list master_filter_data">
                    <input type="hidden" name="city_id">
                    @foreach($citiesList as $cities)
                        <li data-value="{{ $cities->id }}" class="option">{{ $cities->name }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="nice-select" tabindex="0">
            <span class="current">Bedrooms</span>
            <ul class="list master_filter_data">
                <input type="hidden" name="number_of_bedrooms">
                <li data-value class="option selected">Bedrooms</li>
                <li data-value="1" class="option">1 Bed</li>
                <li data-value="2" class="option">2 Bed</li>
                <li data-value="3" class="option">3 Bed</li>
                <li data-value="4" class="option">4 Bed</li>
                <li data-value="5" class="option">5 Bed</li>
                <li data-value="6" class="option">7 Bed</li>
            </ul>
        </div>
        <div class="nice-select" tabindex="0">
            <span class="current">Bathrooms</span>
            <ul class="list master_filter_data">
                <input type="hidden" name="number_of_bathrooms">
                <li data-value class="option selected">Bathrooms</li>
                <li data-value="1" class="option">1 Bath</li>
                <li data-value="2" class="option">2 Bath</li>
                <li data-value="3" class="option">3 Bath</li>
                <li data-value="4" class="option">4 Bath</li>
                <li data-value="5" class="option">5 Bath</li>
                <li data-value="6" class="option">6 Bath</li>
            </ul>
        </div>
    </div>
    <div class="grid-4-cols">
        <fieldset class="name">
            <input type="text" placeholder="Min. Area" class="" name="min_area" value="" aria-required="true" required="">
        </fieldset>
        <fieldset class="name">
            <input type="text" placeholder="Max. Area" class="" name="max_area" value="" aria-required="true" required="">
        </fieldset>
        <fieldset class="name">
            <input type="text" placeholder="Min. Price" class="" name="min_price" value="" aria-required="true" required="">
        </fieldset>
        <fieldset class="name">
            <input type="text" placeholder="Max. Price" class="" name="max_price" value="" aria-required="true" required="">
        </fieldset>
    </div>
</div>
@if(!empty($amenities))
    <div>
        <div class="title">Amenities</div>
        <ul class="grid-checkbox">
            @foreach($amenities as $amenity)
            <li class="checkbox-item">
                <label>
                    <p>{{ $amenity->name }}</p>
                    <input type="checkbox" name="amenities[]" value="{{ $amenity->id }}">
                    <span class="btn-checkbox"></span>
                </label>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
