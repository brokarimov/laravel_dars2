<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/index3', function () {
    return view('index3');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/widgets', function () {
    return view('pages/widgets');
});

Route::get('/calendar', function () {
    return view('pages/calendar');
});
Route::get('/gallery', function () {
    return view('pages/gallery');
});

Route::get('/kanban', function () {
    return view('pages/kanban');
});

Route::get('/topNav', function () {
    return view('pages/layout/topNav');
});
Route::get('/boxed', function () {
    return view('pages/layout/boxed');
});
Route::get('/chartJS', function () {
    return view('pages/charts/chartJS');
});
Route::get('/flot', function () {
    return view('pages/charts/flot');
});
Route::get('/inline', function () {
    return view('pages/charts/inline');
});
Route::get('/uplot', function () {
    return view('pages/charts/uplot');
});

Route::get('/buttons', function () {
    return view('pages/UI/buttons');
});

Route::get('/general', function () {
    return view('pages/UI/general');
});
Route::get('/icons', function () {
    return view('pages/UI/icons');
});

Route::get('/sliders', function () {
    return view('pages/UI/sliders');
});

Route::get('/general_elem', function () {
    return view('pages/Forms/general_elem');
});
Route::get('/advanced', function () {
    return view('pages/Forms/advanced');
});

Route::get('/validation', function () {
    return view('pages/Forms/validation');
});
Route::get('/simple', function () {
    return view('pages/tables/simple');
});

Route::get('/data', function () {
    return view('pages/tables/data');
});
Route::get('/jsgrid', function () {
    return view('pages/tables/jsgrid');
});