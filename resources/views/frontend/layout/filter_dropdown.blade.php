<ul>
    @if(!empty($propertyList))
        @foreach ($propertyList as $property)
            <li>
                <a href="{{ url('/get-detail-property').'/'.$property->id }}">
                    <div class="item1">
                        <div>
                            <div class="image">
                                @if(isset($property->images[0]))
                                    <img src="{{ asset('/storage').'/'.$property->images[0] }}" alt="groundfloor-livingroom">
                                @else
                                    <img src="frontend/images/author/avatar-8.png" alt="groundfloor-livingroom">
                                @endif
                            </div>
                            <p>{{ $property->name }} </p>
                        </div>
                        <div class="text">For {{ ucfirst($type) }}</div>
                    </div>
                </a>
            </li>
        @endforeach
    @else
        <li>No Data found
    @endif
</ul>
