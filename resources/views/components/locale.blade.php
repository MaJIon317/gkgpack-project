<div x-data="{ languageOpen: false }" class="relative">
    <button @click="languageOpen = ! languageOpen" class="relative block mx-4 text-indigo-400 hover:text-indigo-700">{{ ucfirst(app()->getLocale()) }}</button>

    <div x-cloak x-show="languageOpen" @click="languageOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

    <div x-cloak x-show="languageOpen" class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
        @foreach (config('app.available_locales') as $locale)
            <button type="button" class="block w-full px-4 py-2 text-left text-sm text-gray-700 {{ app()->getLocale() == $locale ? 'text-white bg-indigo-500' : '' }} hover:bg-indigo-600 hover:text-white" wire:click="changeLocale('{{ $locale }}')">{{ ucfirst($locale) }}</button>
        @endforeach
    </div>
</div>

