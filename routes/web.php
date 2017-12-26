<?php

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/disclaimer', function () {
    return view('disclaimer');
});

Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});
