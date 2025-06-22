<div>
    <x-table-default>
        <x-slot name="thead">
            <x-table-default-column tag="th" class="m-0 p-0">
                <x-fields.select
                    classBlock=""
                    wire:model.change="subject">

                    <option value="">{{ __('Subject') }}</option>
                    @foreach ($subjects as $value)
                        <option value="{{ $value->subject }}">{{ __(ucfirst(str_replace('_', ' ', $value->subject))) }}</option>
                    @endforeach
                </x-fields.select>
            </x-table-default-column>
            <x-table-default-column tag="th">{{ __('Object') }}</x-table-default-column>
            <x-table-default-column tag="th" class="text-right min-w-[180px]">{{ __('Created at') }}</x-table-default-column>
        </x-slot>

        @foreach($activities as $activity)
            <tr>
                <x-table-default-column>{{ __(ucfirst(str_replace('_', ' ', $activity->subject))) }}</x-table-default-column>
                <x-table-default-column>
                    <div class="flex flex-wrap gap-1">
                        @foreach ($activity->object as $key => $object)
                            <div class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                                <string>{{ $key }}:</string>
                                <span>{{ $object }}</span>
                            </div>
                        @endforeach
                    </div>
                </x-table-default-column>
                <x-table-default-column class="text-right">{{ $activity->created_at->diffForHumans() }}</x-table-default-column>
            </tr>
        @endforeach
    </x-table-default>

    {{ $activities->links() }}
</div>
