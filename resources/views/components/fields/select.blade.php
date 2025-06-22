@props([
    'label' => '',
    'name' => null,
    'required' => false,
    'disabled' => false,
    'selected' => null,
    'classBlock' => null,
    'tooltip' => null
])

@php
    $name = !$name ? ($attributes->getAttributes()['wire:model'] ?? fake()->ean13()) : fake()->ean13();
@endphp

<div class="{{ $classBlock ?? 'mb-4' }}">
    @if ($label)
        <label
            for="input-{{ $name }}"
            class="{{ ($required ?? false) ? 'after:content-["*"]' : '' }} mb-2.5 block font-medium text-black">
            {{ $label }}
        </label>
    @endif

    <select
        name="{{ $name }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $attributes->merge(['class' => 'w-full rounded-lg border border-stroke bg-white py-3 pl-3 pr-8 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary']) }}>
        {{ $slot }}
    </select>

    @if ($tooltip)
        <p class="mt-2 text-sm" role="alert">{{ $tooltip }}</p>
    @endif 

    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">{{ $message }}</p>
    @enderror
</div>
