@php
    $name = $attributes['name'] ?? ($attributes['wire:model'] ?? fake()->uuid());
@endphp

<div class="{{ $classBlock ?? 'mb-5' }}">
    @isset($label)
        <label
            for="input-{{ $name }}"
            class="{{ ($required ?? false) ? 'after:content-["*"]' : '' }} mb-2.5 block font-medium text-black">
            {{ $label }}
        </label>
    @endisset

    <div class="relative w-full">
        <input
            name="{{ $name }}"
            type="{{ $type ?? 'text' }}"
            placeholder="{{ $placeholder ?? '' }}"
            value="{{ old($value ?? false) }}"
            id="input-{{ $name }}"
            {{ ($required ?? false) ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'w-full rounded-lg border border-stroke bg-while py-3 pl-2 pr-2 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary']) }}
        >
        {{ $buttons ?? null }}
    </div>

    {{ $slot }}

    @error($name)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">{{ $message }}</p>
    @enderror

    @if (isset($icon))
        <span class="absolute right-4 top-4">
            {!! $icon !!}
        </span>
    @endif
</div>

