<div>

    <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600">
        <div class="flex items-center gap-3">
            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            @livewire('components.HeaderSeachProduct', key(1))

        </div>

        <div class="flex items-center">
            @livewire('locale')

            {{--
            <div x-data="{ notificationOpen: false }" class="relative">
                <button @click="notificationOpen = ! notificationOpen" class="flex mx-4 text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <div x-cloak x-show="notificationOpen" @click="notificationOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                <div x-cloak x-show="notificationOpen" class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80" style="width:20rem;">
                    <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600" wire:navigate>
                        <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                        <p class="mx-2 text-sm">
                            <span class="font-bold" href="#">Sara Salah</span> replied on the <span class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                        </p>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600" wire:navigate>
                        <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
                        <p class="mx-2 text-sm">
                            <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                        </p>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600" wire:navigate>
                        <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
                        <p class="mx-2 text-sm">
                            <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                        </p>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600" wire:navigate>
                        <img class="object-cover w-8 h-8 mx-1 rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
                        <p class="mx-2 text-sm">
                            <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                        </p>
                    </a>

                    <a href="#" class="flex items-center justify-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600 border-t-2 border-indigo-500" wire:navigate>
                        <p class="mx-2 text-sm">{{ __('Show all') }}</p>
                    </a>
                </div>
            </div>
            --}}

            <div x-data="{ languageOpen: false }"  class="relative">
                <button @click="languageOpen = ! languageOpen" class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                    <img class="object-cover w-full h-full" src="data:image/svg+xml;base64,PCEtLSBpY29uNjY2LmNvbSAtIE1JTExJT05TIE9GIEZSRUUgVkVDVE9SIElDT05TIC0tPjxzdmcgdmlld0JveD0iMCAwIDUxMiA1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgaWQ9InJpZ2h0LWFycm93Ij48Y2lyY2xlIGlkPSJDaXJjbGUiIGN4PSIyNTYiIGN5PSIyNTYiIGZpbGw9IiMyZTMxOTIiIHI9IjI1NiI+PC9jaXJjbGU+PGcgZmlsbD0iI2ZmZiI+PHBhdGggZD0ibTI0NS42MyAyNTAuNjVoMjAuNzNhMTQzIDE0MyAwIDAgMSAxNDMgMTQzdjUuMjRhMTIgMTIgMCAwIDEgLTEyIDEyaC0yODIuNzFhMTIgMTIgMCAwIDEgLTEyLTEydi01LjI0YTE0MyAxNDMgMCAwIDEgMTQyLjk4LTE0M3oiPjwvcGF0aD48ZWxsaXBzZSBjeD0iMjU2IiBjeT0iMTYwLjQ5IiByeD0iNTkuNzYiIHJ5PSI3MC45NiI+PC9lbGxpcHNlPjwvZz48L2c+PC9zdmc+" alt="Your avatar">
                </button>

                <div x-cloak x-show="languageOpen" @click="languageOpen = false" class="fixed inset-0 z-10 w-full h-full"></div>

                <div x-cloak x-show="languageOpen" class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                    <a href="{{ route('user.activity') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white" wire:navigate>{{ __('Activity') }}</a>

                    <a href="{{ route('setting') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white" wire:navigate>{{ __('Setting') }}</a>

                    @livewire('logout')
                </div>
            </div>
        </div>
    </header>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert color="error" message="ERROR" description="{{ $error }}" />
        @endforeach
    @endif

</div>
