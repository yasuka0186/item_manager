<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
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

// 商品一覧ページ
Route::get('/item', [ItemController::class, 'index']);

// 商品登録ページ
Route::get('/item/add', [ItemController::class, 'showAdd']);

// 商品登録の実行
Route::post('/item/add', [ItemController::class, 'add']);

// 商品編集ページ
Route::get('/item/edit/{id}', [ItemController::class, 'showEdit']);

// 管理者ページ
Route::get('/admins', [AdminController::class, 'index']);

// 管理者登録ページ
Route::get('/admin/add', [AdminController::class, 'showAdd']);

// 管理者登録の実行
Route::post('/admin/add', [AdminController::class, 'add']);

// 管理者編集ページ
Route::get('/admin/edit/{id}', [AdminController::class, 'showEdit']);