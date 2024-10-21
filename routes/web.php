<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('welcome'); // ini merujuk ke halaman welcome.blade.php
});
Route::get('/index', function () {
    return view('index');
});