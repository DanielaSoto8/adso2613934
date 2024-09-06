@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <a class="btn-prev" href="javascript:;" style="opacity: 0.4;cursor: default">
            <img src="{{ asset('images/btn-prev.png')}}" alt="prev" />
        </a>
        
    @else
    <a class="btn-prev" href="{{ $paginator->previousPageUrl() }}">
        <img src="{{ asset('images/btn-prev.png')}}" alt="prev" />
    </a>
    @endif

    <span>{{ $paginator->currentPage().'/'.$paginator->lastPage()}}</span>
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a class="btn-next" href="{{ $paginator->nextPageUrl() }}">
        <img src="{{ asset('images/btn-next.png')}}" alt="Next" />
    </a>
    @else
    <a class="btn-next" href="javascript:;" style="opacity: 0.4;cursor: default">
        <img src="{{ asset('images/btn-next.png')}}" alt="Next" />
    </a>
    @endif
@endif
