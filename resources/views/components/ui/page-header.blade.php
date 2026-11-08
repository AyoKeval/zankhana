@props([
    'title' => '',
    'description' => null,
    'breadcrumbs' => [],
])

<div class="pb-5 mb-5 border-b border-border">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
        <div>
            @if(!empty($breadcrumbs))
                <nav class="flex items-center gap-1.5 text-xs text-muted-foreground mb-1.5 font-medium">
                    @foreach($breadcrumbs as $label => $url)
                        @if(!$loop->last)
                            <a href="{{ $url }}" class="hover:text-primary transition">{{ $label }}</a>
                            <i class="ki-filled ki-right text-[10px] text-muted-foreground/60"></i>
                        @else
                            <span class="text-foreground font-semibold">{{ $label }}</span>
                        @endif
                    @endforeach
                </nav>
            @endif
            <h1 class="text-xl font-bold tracking-tight text-foreground">{{ $title }}</h1>
            @if($description)
                <p class="text-xs text-muted-foreground mt-0.5">{{ $description }}</p>
            @endif
        </div>
        @if(isset($actions))
            <div class="flex items-center flex-wrap gap-2.5">
                {{ $actions }}
            </div>
        @endif
    </div>
</div>

