@props([
    'tag' => 'td',
])

@php
    $mergeClass = match ($tag) {
      'th' => 'px-4 py-2 border-b-2 border-gray-200 text-left text-sm font-medium text-gray-600 dark:text-gray-500',
      default => 'px-4 py-4 bg-white text-sm border-b border-neutral-200 dark:border-white/10',
    };
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $mergeClass]) }}>
    <div class="inline-flex gap-3">
        {{ $slot }}
    </div>
</{{ $tag }}>
