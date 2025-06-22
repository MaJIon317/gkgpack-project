<?php

namespace App\Imports;

use App\Models\Order;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithSkipDuplicates;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class OrdersImport implements ToCollection, WithValidation, WithStartRow, WithUpserts, WithBatchInserts, WithChunkReading, WithSkipDuplicates
{
    use Importable;

    public function collection(Collection $rows)
    {
        $orders = [];

        foreach ($rows as $row)
        {
            $name = $row[13];
            $barcode = $row[15];

            $productName = $row[28];
            $productStock = $row[29];

            $product = Product::where('name', $productName)->first();

            if (!isset($orders[$name])) {
                $orders[$name] = [
                    'name' => $name,
                    'barcode' => $barcode,
                    'products' => [],
                ];
            }

            $orders[$name]['products'][] = [
                'product' => $product,
                'qty' => $productStock,
            ];
        }

        $warehouse = Warehouse::first();

        foreach ($orders as $name => $order) {
            $newOrder = Order::create([
                'name' => $order['name'],
                'barcode' => $order['barcode'],
                'note' => 'Excel',
            ]);

            foreach ($order['products'] as $product) {
                $newOrder->products()->create([
                    'product_id' => $product['product']->id,
                    'warehouse_id' => $warehouse->id,
                    'qty' => (int) $product['qty'] ?? 1,
                    'collected' => false
                ]);
            }
        }

    }

    public function rules(): array
    {
        return [
            '13' => 'required|string|min:3|max:250|unique:orders,name',
            '15' => 'required|string|min:3|max:250|unique:orders,barcode',
            '28' => 'required|string|min:3|max:250|exists:products,name',
            '29' => 'required'
        ];
    }


    public function uniqueBy()
    {
        return 'name';
    }

    public function batchSize(): int
    {
        return 100;
    }

    public function chunkSize(): int
    {
        return 100;
    }

    public function startRow(): int
    {
        return 2;
    }
}
