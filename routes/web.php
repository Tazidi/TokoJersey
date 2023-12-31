<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Home;
use App\Livewire\AdminDashboard;
use App\Livewire\ProductDetail;
use App\Livewire\ProductIndex;
use App\Livewire\ProductLiga;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', function () {
//     return view('livewire.home');
// });
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', AdminDashboard::class)->name('admin.dashboard');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', Home::class)->name('home');
Route::get('/products',ProductIndex::class)->name('products');
Route::get('/products/liga/{ligaId}', ProductLiga::class)->name('product.liga');
Route::get('/products/{id}',ProductDetail::class)->name('products-detail');