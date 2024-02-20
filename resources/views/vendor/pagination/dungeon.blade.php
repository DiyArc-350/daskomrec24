<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="text-white font-ringbearer mt-6 flex justify-center gap-x-6">
    <span class="text-[16px] bg-light hover:bg-dark mx-2 px-2 py-2 rounded-sm">
        @if ($paginator->onFirstPage())
            <span class="px-4 py-4" aria-disabled="true" aria-label="{{ __('Previous') }}">
                <span aria-hidden="true">{{ ('Previous') }}</span>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-1" rel="prev" aria-label="{{ ('Previous') }}">{{('Previous') }}</a>
        @endif
    </span>

    <span class="text-[16px] bg-light hover:bg-dark mx-2 px-2 py-2 rounded-sm">
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-4" rel="next" aria-label="{{ ('next') }}">{{ ('Next') }}</a>
        @else
            <span class="" aria-disabled="true" aria-label="{{ ('Next') }}">
                <span aria-hidden="true">{{ ('Next') }}</span>
            </span>
        @endif
    </span>
</nav>