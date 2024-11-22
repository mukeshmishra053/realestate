<div>
    <div class="grid-3-cols mb-20">
        @if(!empty($citiesList))
            <div class="nice-select" tabindex="0">
                <span class="current">City</span>
                <ul class="list master_filter_data">
                    <input type="hidden" name="city_id" value="{{ @$filterData['city_id'] }}">
                    @foreach($citiesList as $cities)
                        <li data-value="{{ $cities->id }}" class="option {{ (!empty($filterData['city_id']) && $filterData['city_id'] == $cities->id) ? 'selected' : ''}}">{{ $cities->name }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="nice-select" tabindex="0">
            <span class="current">{{ (!empty($filterData['number_of_bedrooms'])) ? $filterData['number_of_bedrooms'].' Bed' : ''}}</span>
            <ul class="list master_filter_data">
                <input type="hidden" name="number_of_bedrooms" value="{{ @$filterData['number_of_bedrooms'] }}">
                <li data-value class="option {{ !isset($filterData['number_of_bedrooms']) ? 'selected' : ''}}">Bedrooms</li>
                <li data-value="1" class="option {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == "1") ? 'selected' : ''}}">1 Bed</li>
                <li data-value="2" class="option {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 2) ? 'selected' : ''}}">2 Bed</li>
                <li data-value="3" class="option {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 3) ? 'selected' : ''}}">3 Bed</li>
                <li data-value="4" class="option {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 4) ? 'selected' : ''}}">4 Bed</li>
                <li data-value="5" class="option {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 5) ? 'selected' : ''}}">5 Bed</li>
                <li data-value="6" class="option {{ (!empty($filterData['number_of_bedrooms']) && $filterData['number_of_bedrooms'] == 6) ? 'selected' : ''}}">6 Bed</li>
            </ul>
        </div>
        <div class="nice-select" tabindex="0">
            <span class="current">{{ (!empty($filterData['number_of_bedrooms'])) ? $filterData['number_of_bathrooms'].' Bathrooms' : ''}}</span>
            <ul class="list master_filter_data">
                <input type="hidden" name="number_of_bathrooms" value="{{ @$filterData['number_of_bathrooms'] }}">
                <li data-value class="option {{ !isset($filterData['number_of_bathrooms']) ? 'selected' : ''}}">Bathrooms</li>
                <li data-value="1" class="option {{ (!empty($filterData['number_of_bathrooms']) && $filterData['number_of_bathrooms'] == "1") ? 'selected' : ''}}">1 Bath</li>
                <li data-value="2" class="option {{ (!empty($filterData['number_of_bathrooms']) && $filterData['number_of_bathrooms'] == "2") ? 'selected' : ''}}">2 Bath</li>
                <li data-value="3" class="option {{ (!empty($filterData['number_of_bathrooms']) && $filterData['number_of_bathrooms'] == "3") ? 'selected' : ''}}">3 Bath</li>
                <li data-value="4" class="option {{ (!empty($filterData['number_of_bathrooms']) && $filterData['number_of_bathrooms'] == "4") ? 'selected' : ''}}">4 Bath</li>
                <li data-value="5" class="option {{ (!empty($filterData['number_of_bathrooms']) && $filterData['number_of_bathrooms'] == "5") ? 'selected' : ''}}">5 Bath</li>
                <li data-value="6" class="option {{ (!empty($filterData['number_of_bathrooms']) && $filterData['number_of_bathrooms'] == "6") ? 'selected' : ''}}">6 Bath</li>
            </ul>
        </div>
    </div>
    <div class="grid-4-cols">
        <fieldset class="name">
            <input type="text" placeholder="Min. Area" class="" name="min_area" value="{{ @$filterData['min_area']}}">
        </fieldset>
        <fieldset class="name">
            <input type="text" placeholder="Max. Area" class="" name="max_area" value="{{ @$filterData['max_area']}}">
        </fieldset>
        <fieldset class="name">
            <input type="text" placeholder="Min. Price" class="" name="min_price" value="{{ @$filterData['min_price']}}">
        </fieldset>
        <fieldset class="name">
            <input type="text" placeholder="Max. Price" class="" name="max_price" value="{{ @$filterData['max_price']}}">
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
                    <input type="checkbox" name="amenities[]" value="{{ $amenity->id }}"  {{ (!empty($filterData['amenities']) && in_array($amenity->id,$filterData['amenities'])) ? 'checked' : ''}}>
                    <span class="btn-checkbox"></span>
                </label>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
