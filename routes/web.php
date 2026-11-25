<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return 'Name: Arnolex R. Taghoy | Section: BSCS 2';
});
