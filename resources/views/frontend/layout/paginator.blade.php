@if ($paginator->hasPages())
    <ul class="wg-pagination justify-center wow fadeInUp">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <li class="disabled"><span><i class="icon-keyboard_arrow_left"></i></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="icon-keyboard_arrow_left"></i></a></li>
        @endif
        <!-- Pagination Elements -->
        @foreach ($paginator->links() as $link)
            @if (is_string($link))
                <!-- "Three Dots" Separator -->
                <li class="disabled"><span>{{ $link }}</span></li>
            @elseif($link['active'])
                <!-- Active Page Link -->
                <li class="active"><a href="#">{{ $link['label'] }}</a></li>
            @else
                <!-- Inactive Page Link -->
                <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
            @endif
        @endforeach
        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="icon-keyboard_arrow_right"></i></a></li>
        @else
            <li class="disabled"><span><i class="icon-keyboard_arrow_right"></i></span></li>
        @endif
    </ul>
@endif
