@if($paginator->hasPages())
    @if ($paginator->onFirstPage())
        <span class="previous-link-disable">
            @lang('pagination.previous')
        </span>

    @else
        <a href="{{$paginator->previousPageUrl()}}" class="previous-link">
            @lang('pagination.previous')
        </a>
    @endif

    @if($paginator->hasMorePages())   
        <a href="{{$paginator->nextPageUrl()}}" class="next-link">
            @lang('pagination.next')
        </a>
    @else
        <span class="next-link-disable">
            @lang('pagination.next')
        </span>
    @endif
@endif