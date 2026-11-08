@props([
    'title' => '',
    'value' => '0',
    'icon' => 'element-11',
    'color' => 'primary',
    'badge' => null,
    'sub' => null,
])

@php
    $colorMap = [
        'primary' => [
            'iconBg' => 'bg-primary/10 text-primary',
            'badge'  => 'kt-badge-primary',
            'border' => 'hover:border-primary/50',
        ],
        'success' => [
            'iconBg' => 'bg-green-500/10 text-green-600 dark:text-green-400',
            'badge'  => 'kt-badge-success',
            'border' => 'hover:border-green-500/50',
        ],
        'danger' => [
            'iconBg' => 'bg-red-500/10 text-red-600 dark:text-red-400',
            'badge'  => 'kt-badge-destructive',
            'border' => 'hover:border-red-500/50',
        ],
        'warning' => [
            'iconBg' => 'bg-yellow-500/10 text-yellow-600 dark:text-yellow-400',
            'badge'  => 'kt-badge-warning',
            'border' => 'hover:border-yellow-500/50',
        ],
        'info' => [
            'iconBg' => 'bg-sky-500/10 text-sky-600 dark:text-sky-400',
            'badge'  => 'kt-badge-info',
            'border' => 'hover:border-sky-500/50',
        ],
    ];

    $cfg = $colorMap[$color] ?? $colorMap['primary'];

    // Map common icon names to KeenIcons
    $keenIcon = match($icon) {
        'book' => 'book-open',
        'grid' => 'element-11',
        'download' => 'file-down',
        'user', 'users' => 'profile-circle',
        'check' => 'check-circle',
        'clock' => 'time',
        default => $icon,
    };
@endphp

<div {{ $attributes->merge(['class' => 'kt-card rounded-xl border border-input bg-background p-5 shadow-xs transition-all duration-200 ' . $cfg['border']]) }}>
    <div class="flex items-center justify-between mb-3">
        <span class="text-sm font-medium text-muted-foreground">{{ $title }}</span>
        <div class="size-10 rounded-lg flex items-center justify-center {{ $cfg['iconBg'] }}">
            <i class="ki-filled ki-{{ $keenIcon }} text-xl"></i>
        </div>
    </div>
    <div class="flex items-baseline justify-between gap-2">
        <h2 class="text-2xl font-bold text-foreground tracking-tight">{{ $value }}</h2>
        @if($badge)
            <span class="kt-badge kt-badge-sm {{ $cfg['badge'] }} kt-badge-outline shrink-0">{{ $badge }}</span>
        @endif
    </div>
    @if($sub)
        <p class="text-xs text-muted-foreground mt-2 flex items-center gap-1">
            <span class="inline-block size-1.5 rounded-full bg-muted-foreground/40"></span>
            {{ $sub }}
        </p>
    @endif
</div>

