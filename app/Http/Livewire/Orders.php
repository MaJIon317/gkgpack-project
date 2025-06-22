<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public array $filter = [];

    public function export()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }

    #[On('echo:orders,OrderEvent')]
    public function render()
    {
        $orders = Order::where(function (Builder $builder) {
                if (isset($this->filter['status']) && (in_array($this->filter['status'], array_column(\App\Enums\OrderStatuses::cases(), 'value'))) && ($filter = $this->filter['status'])) {
                    $builder->where('status', $filter);
                }

                if (auth()->user()->hasRole('importer')) {
                    $builder->where('user_id', auth()->user()->id)
                        ->orWhere('user_id', null);
                }
            })
            ->orderByDesc('created_at')
            ->paginate();

        return view('orders.index', compact('orders'))
            ->title(__('Orders'));
    }
}
