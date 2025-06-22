@props([
    'title',
    'description',
    'submit',
    'class' => 'md:grid md:grid-cols-3 md:gap-6',
])

<div class="{{ $class }}">
    <form wire:submit="{{ $submit }}" class="w-full">
        @if (isset($title) || isset($description))
            <div class="bg-white border-b-2 border-indigo-500 px-7 py-4">
                @if (isset($title))
                    <h3 class="font-medium text-black">{{ $title }}</h3>
                @endif
                @if (isset($description))
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ $description }}
                    </p>
                @endif
            </div>
        @endif

        @isset($form)
            <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow">
                {{ $form }}
            </div>
        @endisset

        @if (isset($actions))
            <div class="flex flex-wrap items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-end sm:px-6 shadow gap-2">
                {{ $actions }}
            </div>
        @endif
    </form>
</div>
