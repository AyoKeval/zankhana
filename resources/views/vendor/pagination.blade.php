@if ($paginator->hasPages())
    <div class="flex items-center gap-1 flex-wrap" role="navigation" aria-label="Pagination Navigation">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 rounded-lg opacity-40 cursor-not-allowed text-muted-foreground" aria-disabled="true">
                <i class="ki-filled ki-left text-xs"></i>
            </span>
        @else
            <a class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 rounded-lg text-secondary-foreground hover:bg-muted hover:text-foreground transition" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <i class="ki-filled ki-left text-xs"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 rounded-lg opacity-60 text-muted-foreground cursor-default">
                    {{ $element }}
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="kt-btn kt-btn-icon kt-btn-primary kt-btn-sm size-8 rounded-lg font-semibold shadow-xs" aria-current="page">
                            {{ $page }}
                        </span>
                    @else
                        <a class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 rounded-lg text-secondary-foreground hover:bg-muted hover:text-foreground font-medium transition" href="{{ $url }}">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 rounded-lg text-secondary-foreground hover:bg-muted hover:text-foreground transition" href="{{ $paginator->nextPageUrl() }}" rel="next">
                <i class="ki-filled ki-right text-xs"></i>
            </a>
        @else
            <span class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm size-8 rounded-lg opacity-40 cursor-not-allowed text-muted-foreground" aria-disabled="true">
                <i class="ki-filled ki-right text-xs"></i>
            </span>
        @endif

    </div>
@endif
