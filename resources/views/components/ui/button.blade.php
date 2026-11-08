@props([
    'variant' => 'primary',
    'size' => 'md',
    'icon' => null,
    'href' => null,
    'type' => 'button',
])

@php
    $variantClass = match($variant) {
        'primary' => 'kt-btn-primary',
        'outline' => 'kt-btn-outline',
        'ghost' => 'kt-btn-ghost',
        'destructive', 'danger' => 'kt-btn-destructive',
        'secondary' => 'kt-btn-secondary',
        'mono' => 'kt-btn-mono',
        default => "kt-btn-{$variant}",
    };

    $sizeClass = match($size) {
        'sm' => 'kt-btn-sm text-xs py-1.5 px-3',
        'lg' => 'kt-btn-lg text-base py-3 px-6',
        default => 'text-sm py-2 px-4',
    };

    $btnClass = "kt-btn {$variantClass} {$sizeClass} inline-flex items-center justify-center gap-2 font-medium transition cursor-pointer";
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $btnClass]) }}>
        @if($icon)
            <i class="ki-filled ki-{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $btnClass]) }}>
        @if($icon)
            <i class="ki-filled ki-{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </button>
@endif

