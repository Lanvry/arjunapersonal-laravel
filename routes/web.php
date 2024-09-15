<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', ['title' => 'HOME', 'prologue' => "I'Am an Programer & Designer", 'image' => 'img/me.png']);
});

Route::get('/download', function () {
    return view('download', ['title' => 'Download', 'prologue' => "Scroll Down To See Content", 'image' => 'img/asap.png']);
});

