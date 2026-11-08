@props([
    'name' => '',
    'id' => null,
    'checked' => false,
    'label' => null,
    'value' => '1',
])

@php
    $switchId = $id ?? $name;
@endphp

<label class="inline-flex items-center gap-2.5 cursor-pointer">
    <input
        type="checkbox"
        name="{{ $name }}"
        id="{{ $switchId }}"
        value="{{ $value }}"
        {{ $checked ? 'checked' : '' }}
        {{ $attributes->merge(['class' => 'kt-switch']) }}
    />
    @if($label)
        <span class="text-sm font-medium text-foreground select-none">{{ $label }}</span>
    @endif
</label>

