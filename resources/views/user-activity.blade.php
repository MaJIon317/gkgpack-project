<div>
    <x-table-default>
        <x-slot name="thead">
            <x-table-default-column tag="th" class="m-0 p-0">
                <x-fields.select
                    classBlock=""
                    wire:model.change="subject_type">

                    <option value="">{{ __('Model') }}</option>
                    @foreach ($this->subjectTypes() as $value)
                        <option value="{{ $value->subject_type }}">{{ __(Str::headline(str_replace('App\Models\\', '', $value->subject_type))) }}</option>
                    @endforeach
                </x-fields.select>
            </x-table-default-column>
            <x-table-default-column tag="th" class="m-0 p-0">
                <x-fields.select
                    classBlock=""
                    wire:model.change="subject_event">

                    <option value="">{{ __('Event') }}</option>
                    @foreach ($this->subjectEvents() as $value)
                        <option value="{{ $value->subject_event }}">{{ $value->subject_event }}</option>
                    @endforeach
                </x-fields.select>
            </x-table-default-column>
            <x-table-default-column tag="th">{{ __('Object') }}</x-table-default-column>
            <x-table-default-column tag="th" class="m-0 p-0">
                <x-fields.select
                    classBlock=""
                    wire:model.change="user_id">

                    <option value="">{{ __('User') }}</option>
                    @if($users)
                        @foreach ($this->users as $userId => $userName)
                            <option value="{{ $userId }}">{{ $userName }}</option>
                        @endforeach
                    @endif
                </x-fields.select>
            </x-table-default-column>
            <x-table-default-column tag="th" class="text-right min-w-[180px]">{{ __('Created at') }}</x-table-default-column>
        </x-slot>

        @foreach($activities as $activity)
            <tr>
                <x-table-default-column>{{ __(Str::headline(str_replace('App\Models\\', '', $activity->subject_type))) }}</x-table-default-column>
                <x-table-default-column>{{ __($activity->subject_event) }}</x-table-default-column>
                <x-table-default-column>
                    <div class="flex flex-wrap gap-1">
                        @foreach ($activity->properties as $key => $property)
                            <div class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
                                <string>{{ $key }}:</string>
                                <span>{{ $property }}</span>
                            </div>
                        @endforeach
                    </div>
                </x-table-default-column>
                <x-table-default-column>{{ $activity->user->name }}</x-table-default-column>
                <x-table-default-column class="text-right">{{ $activity->created_at->diffForHumans() }}</x-table-default-column>
            </tr>
        @endforeach
    </x-table-default>

    {{ $activities->links() }}
</div>
