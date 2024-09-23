<?php

use App\Models\Download;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index-beta');
});

Route::get('/download', function () {
    $downloads = Download::latest();
    if(request('search')){
        $downloads->where('name', 'like', '%' .request('search'). '%');
    }
    return view('download', ['title' => 'Download', 'prologue' => "Scroll Down To See Content", 'image' => 'img/asap.png', 'downloads' => $downloads->get(), 'css' => 'css/style.css', 'js' => 'js/script.js']);
});

Route::get('/link', function () {
    return view('link', ['title' => 'Link', 'prologue' => "Scroll Down To See Content", 'image' => 'img/asap.png', 'css' => 'css/style.css', 'js' => 'js/script.js']);
});

Route::get('/download/{download:slug}', function () {
    return view('download-page', ['title' => 'Download', 'prologue' => "Scroll Down To See Content", 'image' => '../img/asap.png', 'css' => '../css/style.css', 'js' => '../js/script.js']);
});

Route::get('/old', function(){
    return view('index', ['title' => 'HOME', 'prologue' => "I'Am an Programer & Designer", 'image' => 'img/me.png', 'css' => 'css/style.css', 'js' => 'js/script.js']);
});
Route::get('/contact', function(){
    return view('contact');
});

