<?php

use App\Http\Controllers\Api\HousingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/houses',[HousingController::class,'index'])->name('apihouseall');
Route::get('/houses/show/{id}',[HousingController::class, 'show'])->name('apihouseshow');
Route::delete('/houses/destroy/{id}',[HousingController::class, 'destroy'])->name('apihousedestroy');
Route::post('/houses/store',[HousingController::class, 'store'])->name('apihousestore');
Route::put('/houses/update/{id}',[HousingController::class, 'update'])->name('apihouseupdate'); 