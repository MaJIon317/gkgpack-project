<?php

namespace App\Faker;

use Faker\Provider\Base;

class Product extends Base
{
    public function sku(int $length = 8, string $prefix = '', string $suffix = ''): string
    {
        $arr = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
        ];
     
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $result .= $arr[random_int(0, count($arr) - 1)];
        }

        return "$prefix$result$suffix";
    }
}