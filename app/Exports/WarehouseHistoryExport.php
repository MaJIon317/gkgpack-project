<?php

namespace App\Exports;

use App\Models\WarehouseStock;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\Exportable;
use Carbon\Carbon;

class WarehouseHistoryExport implements FromArray, Responsable, WithHeadings
{
    use Exportable;

    private $fileName = 'histories.xlsx';

    public function __construct(
        protected Collection $collection,
    ) {}

    public function headings(): array
    {
        return [
            __('Transaction ID'),
            __('Transaction Type'),
            __('Location'),
            __('Transaction Date'),
            __('Created by'),
            __('Product'),
            __('SKU'),
            __('Quantity'),
            __('Balance (Before)'),
            __('Balance (After)'),
        ];
    }

    public function array(): array
    {
        $array = [];

        foreach($this->collection as $collection) {
            $balanceBefore = (int)WarehouseStock::where([
                ['id', '<', $collection->id],
                ['product_id', $collection->product_id],
                ['warehouse_id', $collection->warehouse_id]
            ])
            ->latest('id')
            ->sum('qty');

            $array[] = [
                $collection->id,
                $collection->warehouse_registration_id ? __('Stock-In') : ($collection->warehouse_reduce_id ? __('Stock-Out') : __('Other')),
                $collection->warehouse->name,
                Carbon::parse( $collection->created_at )->setTimezone( get_user_timezone()),
                $collection->user->name ?? null,
                $collection->product->name,
                $collection->product->sku,
                $collection->qty,
                $balanceBefore,
                ($balanceBefore + $collection->qty)

            ];
        }

        return $array;
    }
}
