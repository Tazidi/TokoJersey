<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Component
{
    public function render()
    {
        // Periksa apakah pengguna yang sedang login memiliki usertype 'admin'
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return view('livewire.admin.admin-dashboard');
        } else {
            // Jika bukan admin, arahkan ke halaman home
            return redirect()->route('home');
        }
    }
}
