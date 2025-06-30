<?php

namespace App\Rules;

use App\Models\Product;
use Illuminate\Contracts\Validation\Rule;

class ProductNotInOrders implements Rule
{
    public function passes($attribute, $value): bool
    {
        $product = Product::find($value);

        return $product && !$product->orders()->exists();
    }

    public function message(): string
    {
        return __('You cannot delete the product, it is already used in orders.');
    }
}
