<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Enums\UserRole;
use App\Exports\CollectionExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Enumerable;
use Illuminate\Database\Eloquent\Model;
use RamonRietdijk\LivewireTables\Actions\Action;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\DateColumn;
use RamonRietdijk\LivewireTables\Columns\SelectColumn;
use RamonRietdijk\LivewireTables\Filters\DateFilter;
use RamonRietdijk\LivewireTables\Filters\SelectFilter;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;
use Livewire\Attributes\On;
use Carbon\Carbon;

#[On('echo:users,UserEvent')]
class UserTable extends LivewireTable
{
    protected string $model = User::class;

    public function columns() : array
    {
        return [
            Column::make(__('Name'), 'name')
                ->sortable()
                ->searchable(),
            Column::make(__('Role'), 'role')
                ->sortable()
                ->searchable(),
            Column::make(__('E-mail'), 'email')
                ->sortable()
                ->searchable(),
            DateColumn::make(__('Created At'), 'created_at')
                ->displayUsing(function (mixed $value, Model $model): string {
                    return Carbon::parse($value)->setTimezone( get_user_timezone())->diffForHumans();
                })
                ->sortable()
                ->searchable(),
            Column::make(__('Actions'), function (Model $model): string {
                    return view('components.table-actions.edit', [
                        'json' => json_encode([
                            'component' => 'user-form',
                            'arguments' => ['user' => $model]
                        ])
                    ]);
                })
                ->clickable(false)
                ->asHtml(),
        ];
    }
    protected function actions(): array
    {
        return [
            Action::make(__('Create a user'), 'publish', function (): void {
                $this->dispatch('openModal', component: 'user-form');
            })->standalone(),

            Action::make(__('Export'), 'export', function (): mixed {
                $collection = $this->appliedQuery()->get();

                return Excel::download(
                    new CollectionExport($collection), 'users.xlsx',
                );
            }),

            Action::make(__('Delete'), 'delete', function (Enumerable $models): void {
                $models->each(function (User $user): void {
                    $validator = Validator::make(
                        ['email' => $user->email],
                        ['email' => 'not_in:' . auth()->user()->email],
                        ['not_in' => __('You cannot delete your account.')],
                    );
            
                    if ($validator->fails()) {
                        $this->dispatch('toast', message: implode(', ', $validator->errors()->all()), type: 'error');
                    } else {
                        $user->delete();
            
                        $this->dispatch('toast', message: __('Successfully deleted'));
                    }
                });
            }),
            
        ];
    }

    protected function filters(): array
    {
        $filtersRoles = [];
        
        foreach (UserRole::cases() as $role) {
            $filtersRoles[$role->value] = __(ucfirst($role->value));
        }

        return [
            SelectFilter::make(__('Role'), 'role')
                ->options($filtersRoles),
            DateFilter::make(__('Created At'), 'created_at'),
        ];
    }
}

