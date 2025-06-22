@props([
    'size' => '',
    'type' => 'button',
    'color' => 'success',
    'class' => false,
    'message' => false,
    'style' => false,
])

@if ($message || $slot)
    <button type="{{ $type }}"
            @if (!$class)
                @if ($color == 'dark')
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary @if ($size == 'sm') px-2 py-2 @else px-6 py-3 @endif font-medium text-center bg-gray-900 text-white hover:bg-gray-700 transition hover:bg-opacity-90"
                @elseif ($color == 'light')
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary @if ($size == 'sm') px-2 py-2 @else px-6 py-3 @endif font-medium text-center bg-white text-gray-700 hover:bg-gray-200 transition hover:bg-opacity-90"
                @elseif ($color == 'red')
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary @if ($size == 'sm') px-2 py-2 @else px-6 py-3 @endif bg-red-600 text-white font-medium tracking-wide hover:bg-red-500 ml-3"
                @elseif ($color == 'a')
                    class="text-indigo-400 hover:text-indigo-700"
                @else
                    class="flex items-center justify-center gap-2 cursor-pointer rounded-lg border border-primary bg-primary @if ($size == 'sm') px-2 py-2 @else px-6 py-3 @endif font-medium text-center bg-indigo-600 text-white hover:bg-indigo-500 transition hover:bg-opacity-90"
                @endif
            @else
                class="{{ $class }}"
            @endif

            @if ($style)
                style="{{ $style }}"
            @endif

            {{ $attributes }}

            wire:loading.attr="disabled"
        >

        @if ($color != 'a')
            <svg class="mr-3 -ml-1 size-5 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" wire:loading @if($attributes->has('wire:target')) wire:target="{{ $attributes->get('wire:target') }}" @endif>
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        @endif

        {{ $slot }}

        {{ $message }}
    </button>
@endif

