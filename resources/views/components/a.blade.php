@props([
    'message' => false,
])

@if ($message || $slot)
    <a 
            class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary px-6 py-3 font-medium text-center bg-indigo-600 text-white hover:bg-indigo-500 transition hover:bg-opacity-90"
            {{ $attributes }}
            wire:navigate
        >

        {{ $slot }}

        {{ $message }}
    </a>
@endif

