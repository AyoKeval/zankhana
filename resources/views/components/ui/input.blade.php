@props([
    'label' => null,
    'name' => '',
    'type' => 'text',
    'icon' => null,
    'placeholder' => '',
    'value' => '',
    'required' => false,
    'error' => null,
    'help' => null,
    'id' => null,
])

@php
    $inputId = $id ?? $name;
@endphp

<div class="flex flex-col gap-1.5 w-full">
    @if($label)
        <label for="{{ $inputId }}" class="text-xs font-semibold text-foreground tracking-wide">
            {{ $label }}
            @if($required)
                <span class="text-destructive">*</span>
            @endif
        </label>
    @endif

    <div class="kt-input w-full">
        @if($icon)
            <i class="ki-filled ki-{{ $icon }} text-muted-foreground text-base"></i>
        @endif
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $inputId }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'grow bg-transparent text-sm text-foreground focus:outline-none min-w-0 placeholder:text-muted-foreground']) }}
        />
    </div>

    @if($help || $error)
        <p id="{{ $name }}_error" class="text-xs {{ $error ? 'text-destructive' : 'text-muted-foreground' }} mt-0.5 mb-0">
            {{ $error ?? $help }}
        </p>
    @else
        <p id="{{ $name }}_error" class="text-xs text-muted-foreground mt-0.5 mb-0 hidden"></p>
    @endif
</div>

