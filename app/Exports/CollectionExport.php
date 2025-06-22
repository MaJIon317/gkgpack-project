<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class CollectionExport implements FromCollection
{
    public function __construct(
        protected Collection $collection,
    ) {
    }

    public function collection()
    {
        return $this->collection;
    }
}
