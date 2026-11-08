@props([
    'title' => null,
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'kt-card rounded-xl border border-input bg-background shadow-xs overflow-hidden']) }}>
    @if(isset($header) || $title)
        <div class="flex items-center justify-between border-b border-border px-5 py-4">
            @if(isset($header))
                {{ $header }}
            @else
                <div>
                    <h3 class="text-base font-semibold text-foreground tracking-tight">{{ $title }}</h3>
                    @if($description)
                        <p class="text-xs text-muted-foreground mt-0.5">{{ $description }}</p>
                    @endif
                </div>
                @if(isset($toolbar))
                    <div class="flex items-center gap-2">
                        {{ $toolbar }}
                    </div>
                @endif
            @endif
        </div>
    @endif

    <div class="p-5">
        {{ $slot }}
    </div>

    @if(isset($footer))
        <div class="border-t border-border px-5 py-3.5 bg-muted/30 flex items-center justify-between">
            {{ $footer }}
        </div>
    @endif
</div>

