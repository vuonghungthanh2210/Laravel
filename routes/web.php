<?php

use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\TinhTongcontroller;
use App\Http\Controllers\TamGiaccontroller;
use App\Http\Controllers\Usercontroller;
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

Route::get('/trangchu', [Usercontroller::class, 'xinchao'])
;

Route::get('/test', [Mycontroller::class, 'index'])
;


// Tính tổng 2 số
Route::get('/tinh-tong', function () {
    return view('tinh-tong');
});

Route::post('/tinh-tong', [TinhTongController::class, 'tinhTong'])->name('tinh-tong');

// Tính diện tích hình tam giác
Route::get('/tam-giac', [TamGiacController::class, 'index'])->name('tam-giac.index');
Route::post('/tinh-dien-tich', [TamGiacController::class, 'tinhDienTich'])->name('tam-giac.tinh-dien-tich');

