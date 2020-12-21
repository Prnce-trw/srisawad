@if ($paginator->hasPages())

<div class="pagination">
        @if ($paginator->onFirstPage())

        @else
        <a href="{{ $paginator->previousPageUrl() }}"><i class="Flaticon flaticon-left-arrow" style="color: #013799;"></i></a>
        @endif
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><a>{{ $element }}</a></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"><i class="Flaticon flaticon-right-arrow" style="color: #013799;"></i></a>
        @else

        @endif
    </div>
@endif