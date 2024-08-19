<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contoh', function () {
    return "contoh berhasil";
});

Route::resource('items', ItemController::class);