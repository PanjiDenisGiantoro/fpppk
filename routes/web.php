<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
});
Route::prefix('profile')->group(function(){
    Route::get('/',[\App\Http\Controllers\ProfileController::class,'index'])->name('profile');
    Route::post('/',[\App\Http\Controllers\ProfileController::class,'store'])->name('profile.store');
    Route::post('/profile/{id}',[\App\Http\Controllers\ProfileController::class,'update'])->name('profile.update');
});
Route::prefix('user')->group(function(){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('user.index');
    Route::get('/{id}',[\App\Http\Controllers\UserController::class,'show'])->name('user.show');
    Route::post('/confirm/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');
});
Route::get('/lihat',[\App\Http\Controllers\ProfileController::class,'view'])->name('profile.view');
Route::get('/cetak1',[\App\Http\Controllers\ProfileController::class,'show'])->name('profile.show1');
Route::get('/cetak2',[\App\Http\Controllers\ProfileController::class,'show1'])->name('profile.show2');
Route::get('/check',[\App\Http\Controllers\ProfileController::class,'check'])->name('profile.check');
Route::get('/wa',[\App\Http\Controllers\ProfileController::class,'check_wa'])->name('profile.wa');
//area
Route::get('provinces', [\App\Http\Controllers\AreaController::class,'provinces'])->name('provinces');
Route::get('cities', [\App\Http\Controllers\AreaController::class,'cities'])->name('cities');
Route::get('districts', [\App\Http\Controllers\AreaController::class,'districts'])->name('districts');
Route::get('villages', [\App\Http\Controllers\AreaController::class,'villages'])->name('villages');
