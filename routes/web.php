<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamanController;
use App\Models\User;
use App\Models\Buku;
use App\Models\Pinjaman;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('auth.login');
// }); 
// Sudah dihandle Fortify

Route::resource('buku', BukuController::class)->middleware('auth');
Route::resource('pinjaman', PinjamanController::class)->middleware('auth');
