<?php

use App\Http\Controllers\HousingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/houses', [HousingController::class, 'index'])->name('search');
Route::get('/houses/adminPanel', [HousingController::class, 'adminPanel'])->name('adminPanel');
Route::get('/houses/create', [HousingController::class, 'create'])->middleware('role:user')->name('createHouseForm');
Route::post('/houses/store', [HousingController::class, 'store'])->middleware('role:user')->name('HouseStore');
Route::get('/houses/{id}', [HousingController::class, 'edit'])->middleware('role:admin')->name('editHouseForm');
Route::post('/houses/update/{id}', [HousingController::class, 'update'])->middleware('role:admin')->name('HouseUpdate');
Route::delete('/houses/destroy/{id}', [HousingController::class, 'destroy'])->middleware('role:admin')->name('HouseDestroy');
Route::get('/houses/show/{id}',[HousingController::class, 'show'])->name('HouseShow');