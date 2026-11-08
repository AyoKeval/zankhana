@props([
    'variant' => 'primary',
    'outline' => false,
    'size' => 'sm',
])

@php
    $variantClass = match($variant) {
        'primary' => 'kt-badge-primary',
        'success' => 'kt-badge-success',
        'danger', 'destructive' => 'kt-badge-destructive',
        'warning' => 'kt-badge-warning',
        'info' => 'kt-badge-info',
        'secondary' => 'kt-badge-secondary',
        'mono' => 'kt-badge-mono',
        default => "kt-badge-{$variant}",
    };

    $sizeClass = match($size) {
        'xs' => 'kt-badge-xs',
        'sm' => 'kt-badge-sm',
        'lg' => 'kt-badge-lg',
        default => 'kt-badge-sm',
    };

    $outlineClass = $outline ? 'kt-badge-outline' : '';
@endphp

<span {{ $attributes->merge(['class' => "kt-badge {$sizeClass} {$variantClass} {$outlineClass} font-medium inline-flex items-center gap-1"]) }}>
    {{ $slot }}
</span>

