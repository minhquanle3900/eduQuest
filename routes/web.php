<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [TestController::class, 'index']);
Route::get('/', [TestController::class, 'index1']);
Route::get('/teachers', [TestController::class, 'index2']);
Route::get('/dean', [TestController::class, 'index3']);

Route::get('/admin/login', [AdminController::class, 'indexLoginAdmin']);
Route::post('/admin/login', [AdminController::class, 'actionLogin']);
Route::get('/lost-pass', [AdminController::class, 'indexLostPass']);
Route::post('/lost-pass', [AdminController::class, 'actionLostPass']);

Route::group(['prefix' => '/admin'], function() {
    Route::get('/', [AdminController::class, 'index']);

});
