<?php
use App\Http\Controllers\AdminController; // 追記
use App\Http\Controllers\ItemController; // 追記
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/item', [ItemController::class, 'index']); // 追記

Route::get('/admins', [AdminController::class, 'index']); // 追記
