<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\liga;
use App\Models\product;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home',[
            'products' => product::take(4)->get(),
            'ligas' => liga::all()
        ]);
    }
}