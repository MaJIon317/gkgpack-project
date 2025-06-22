<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\WarehouseRegistration;
use Maatwebsite\Excel\Concerns\WithSkipDuplicates;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class ProductsImport implements ToModel, WithHeadingRow, WithUpserts, WithBatchInserts, WithChunkReading, WithSkipDuplicates
{
    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (isset($row['sku']) && !empty($row['sku'])) {
            $product = Product::where('sku', $row['sku'])->first();

            if ($product) {
                $product->updated_at = now();
                $product->save();

                return $product;
            } else {
                $product = Product::create([
                    'sku' => $row['sku'],
                    'barcode' => $row['barcode'] ?? '',
                    'name' => $row['name'] ?? '',
                ]);

                foreach($row as $key => $qty) {
                    if ($qty > 0 && strpos($key, 'warehouse_id') !== false) {
                        $warehouse_id = (int) str_replace(['warehouse_id', '='], '', $key);

                        $warehouse_registraion = WarehouseRegistration::create([
                            'note' => 'CreateProduct Import',
                            'warehouse_id' => $warehouse_id,
                        ]);

                        $product->stocks()->create([
                            'warehouse_id' => $warehouse_id,
                            'warehouse_registration_id' => $warehouse_registraion->id,
                            'qty' => $qty,
                        ]);
                    }
                }
            }
        }

        return null;
    }

    public function uniqueBy()
    {
        return 'sku';
    }

    public function batchSize(): int
    {
        return 100;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
