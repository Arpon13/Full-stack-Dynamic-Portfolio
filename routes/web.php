<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/skills', function () {
    return view('skills');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/experience', function () {
    return view('experience');
});

