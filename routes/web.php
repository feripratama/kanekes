<?php

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/admin', function () {
    return view('admin');
});
