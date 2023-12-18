<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\product;
use App\Models\liga;

class ProductLiga extends Component
{
    public $liga;
    public function mount($ligaId)
    {
        $ligaDetail = Liga::find($ligaId);

        if($ligaDetail) {
            $this->liga = $ligaDetail;
        }
    }

    public function render()
    {
        $products = Product::where('liga_id', $this->liga->id)->get();
        return view('livewire.product-index',[
            'products' => $products
        ]);
    }
}
