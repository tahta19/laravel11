<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Tahta Prameswari']);
});

Route::get('/blog', function () {
    return view('Blog');
});

Route::get('/cp', function () {
    return view('cp');
});
