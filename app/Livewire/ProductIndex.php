<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\product;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::get();
        return view('livewire.product-index',[
            'products' => $products
        ]);
    }
}
