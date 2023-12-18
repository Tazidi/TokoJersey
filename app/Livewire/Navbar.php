<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Liga;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar',[
            'ligas' => Liga::all(),
            // 'jumlah_pesanan' => $this->jumlah, 
        ]);
    }
}
