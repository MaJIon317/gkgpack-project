<div>
    <div class="bg-white border-b-2 border-indigo-500 px-7 py-4">
        <h3 class="font-medium text-black">
            {{ __('Import :name', ['name' => ucfirst($key)]) }}
        </h3>
    </div>

    <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow">

        <div
            x-data="{ uploading: false, progress: 0 }"
            x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false"
            x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
        >
            <x-fields.text
                type="file"
                name="files"
                wire:model.live="files"
                accept="{{ $accept }}"
                multiple
                required
            />

            @error('files.*') <span class="error">{{ $message }}</span> @enderror

            <!-- Progress Bar -->
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>

        <x-table-default>
            <x-slot name="thead">
                <x-table-default-column tag="th">{{ __('Name File') }}</x-table-default-column>
                <x-table-default-column tag="th">{{ __('Upload date') }}</x-table-default-column>
                <x-table-default-column tag="th" class="w-[180px]">{{ __('Done') }}</x-table-default-column>
                <x-table-default-column tag="th" class="w-1">{{ __('Logs') }}</x-table-default-column>
                <x-table-default-column tag="th" class="w-1"></x-table-default-column>
            </x-slot>

            @foreach($imports as $import)
                <tr>
                    <x-table-default-column>{{ $import->name }}
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
                            {{ convert_bytes($import->size) }}
                        </span>
                    </x-table-default-column>
                    <x-table-default-column>{{ $import->created_at->diffForHumans() }}</x-table-default-column>
                    <x-table-default-column>
                        @if ($import->done)
                            {{ $import->updated_at->diffForHumans() }}
                        @else
                            <x-button type="button" size="sm" message="{{ __('Processing') }}" wire:click="import({{ $import }})" />
                        @endif
                    </x-table-default-column>
                    <x-table-default-column class="text-center">
                        @if ($import->decision)
                            <x-button type="button" color="a" wire:click="log({{ $import }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="fill-current" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM4.151 15.29a1.2 1.2 0 0 1-.111-.449h.764a.58.58 0 0 0 .255.384q.105.073.25.114.142.041.319.041.245 0 .413-.07a.56.56 0 0 0 .255-.193.5.5 0 0 0 .084-.29.39.39 0 0 0-.152-.326q-.152-.12-.463-.193l-.618-.143a1.7 1.7 0 0 1-.539-.214 1 1 0 0 1-.352-.367 1.1 1.1 0 0 1-.123-.524q0-.366.19-.639.192-.272.528-.422.337-.15.777-.149.456 0 .779.152.326.153.5.41.18.255.2.566h-.75a.56.56 0 0 0-.12-.258.6.6 0 0 0-.246-.181.9.9 0 0 0-.37-.068q-.324 0-.512.152a.47.47 0 0 0-.185.384q0 .18.144.3a1 1 0 0 0 .404.175l.621.143q.326.075.566.211a1 1 0 0 1 .375.358q.135.222.135.56 0 .37-.188.656a1.2 1.2 0 0 1-.539.439q-.351.158-.858.158-.381 0-.665-.09a1.4 1.4 0 0 1-.478-.252 1.1 1.1 0 0 1-.29-.375m-3.104-.033a1.3 1.3 0 0 1-.082-.466h.764a.6.6 0 0 0 .074.27.5.5 0 0 0 .454.246q.285 0 .422-.164.137-.165.137-.466v-2.745h.791v2.725q0 .66-.357 1.005-.355.345-.985.345a1.6 1.6 0 0 1-.568-.094 1.15 1.15 0 0 1-.407-.266 1.1 1.1 0 0 1-.243-.39m9.091-1.585v.522q0 .384-.117.641a.86.86 0 0 1-.322.387.9.9 0 0 1-.47.126.9.9 0 0 1-.47-.126.87.87 0 0 1-.32-.387 1.55 1.55 0 0 1-.117-.641v-.522q0-.386.117-.641a.87.87 0 0 1 .32-.387.87.87 0 0 1 .47-.129q.265 0 .47.129a.86.86 0 0 1 .322.387q.117.255.117.641m.803.519v-.513q0-.565-.205-.973a1.46 1.46 0 0 0-.59-.63q-.38-.22-.916-.22-.534 0-.92.22a1.44 1.44 0 0 0-.589.628q-.205.407-.205.975v.513q0 .562.205.973.205.407.589.626.386.217.92.217.536 0 .917-.217.384-.22.589-.626.204-.41.205-.973m1.29-.935v2.675h-.746v-3.999h.662l1.752 2.66h.032v-2.66h.75v4h-.656l-1.761-2.676z"/>
                                </svg>
                            </x-button>
                        @endif
                    </x-table-default-column>
                    <x-table-default-column class="text-right">
                        <x-button type="button" color="a" wire:click="download">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="fill-current" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                            </svg>
                        </x-button>

                    </x-table-default-column>
                </tr>
            @endforeach

        </x-table-default>

        {{ $imports->links() }}

    </div>


</div>
