@props([
    'label' => null,
    'name' => '',
    'required' => false,
    'help' => null,
    'error' => null,
    'id' => null,
])

@php
    $selectId = $id ?? $name;
@endphp

<div class="flex flex-col gap-1.5 w-full">
    @if($label)
        <label for="{{ $selectId }}" class="text-xs font-semibold text-foreground tracking-wide">
            {{ $label }}
            @if($required)
                <span class="text-destructive">*</span>
            @endif
        </label>
    @endif

    <div class="relative w-full">
        <select
            name="{{ $name }}"
            id="{{ $selectId }}"
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'kt-select w-full rounded-md border border-input bg-background px-3 py-2 text-sm text-foreground focus:outline-none focus:border-primary']) }}
        >
            {{ $slot }}
        </select>
    </div>

    @if($help || $error)
        <p id="{{ $name }}_error" class="text-xs {{ $error ? 'text-destructive' : 'text-muted-foreground' }} mt-0.5 mb-0">
            {{ $error ?? $help }}
        </p>
    @else
        <p id="{{ $name }}_error" class="text-xs text-muted-foreground mt-0.5 mb-0 hidden"></p>
    @endif
</div>

