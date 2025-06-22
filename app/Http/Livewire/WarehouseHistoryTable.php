<?php

namespace App\Http\Livewire;

use App\Models\Warehouse;
use App\Models\WarehouseStock;
use App\Exports\WarehouseHistoryExport;
use Illuminate\Support\Enumerable;
use Illuminate\Database\Eloquent\Model;
use RamonRietdijk\LivewireTables\Actions\Action;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\ImageColumn;
use RamonRietdijk\LivewireTables\Columns\DateColumn;
use RamonRietdijk\LivewireTables\Columns\SelectColumn;
use RamonRietdijk\LivewireTables\Filters\DateFilter;
use RamonRietdijk\LivewireTables\Filters\SelectFilter;
use RamonRietdijk\LivewireTables\Filters\BooleanFilter;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;
use Carbon\Carbon;

class WarehouseHistoryTable extends LivewireTable
{
    protected string $model = WarehouseStock::class;

    protected bool $useSelection = false;

    public string $sortColumn = 'updated_at';

    public string $sortDirection = 'desc';

    public function columns() : array
    {
        return [
            Column::make(__('Product'), 'product.name')
                ->sortable()
                ->searchable(),
            Column::make(__('Warehouse'), 'warehouse.name')
                ->sortable()
                ->searchable(),
            Column::make(__('Type'), function (Model $model): string {
                $name = '';

                if ($model->warehouse_registration_id) {
                    $name = __('Stock-In');
                } elseif ($model->warehouse_reduce_id) {
                    $name = __('Stock-Out');
                } elseif ($model->warehouse_moving_id) {
                    $name = __('Moving');
                } elseif ($model->order_product_id) {
                    $name = __('Order');
                } else {
                    $name = '-';
                }

                return $name;
            }),
            Column::make(__('Qty'), function (Model $model): string {
                    return $model->qty . ($model->reserve ? __(' (Reserved)') : '');
                })
                ->sortable(),
            DateColumn::make(__('Created At'), 'created_at')
                ->displayUsing(function (mixed $value, Model $model): string {
                    return Carbon::parse($value)->setTimezone( get_user_timezone());
                })
                ->sortable(),
            DateColumn::make(__('Updated At'), 'updated_at')
                ->displayUsing(function (mixed $value, Model $model): string {
                    return Carbon::parse($value)->setTimezone( get_user_timezone());
                })
                ->sortable(),
        ];
    }

    protected function actions(): array
    {
        return [
            Action::make(__('Export'), 'export', function (): mixed {
                $collection = $this->appliedQuery()->get();

                return new WarehouseHistoryExport($collection);
            })
            ->standalone(),

        ];
    }

    protected function filters(): array
    {
        $filterWarehouses = [];

        foreach (Warehouse::all() as $warehouse) {
            $filterWarehouses[$warehouse->id] = $warehouse->name;
        }

        $filterTypes = [
            0 => __('All'),
            'warehouse_registration_id' => __('Stock In'),
            'warehouse_moving_id' => __('Stock Out'),
            'order_product_id' => __('Order'),
        ];



        return [
            DateFilter::make(__('Date'), 'created_at'),
            SelectFilter::make(__('Warehouse'), 'warehouse_id')
                ->options($filterWarehouses),
            //SelectFilter::make(__('Warehouse'), 'warehouse_id')
            //    ->options($filterTypes),
            BooleanFilter::make(__('Stock-In'), function ($builder, mixed $value): void {
                if ($value !== null) {
                    if ($value) {
                        $builder->where('warehouse_registration_id', '!=', '');
                    } else {
                        $builder->where('warehouse_reduce_id', '!=', '');
                    }
                }
            }),
        ];
    }
}
