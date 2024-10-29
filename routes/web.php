<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MasalliqController;
use App\Http\Controllers\OvqatController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// admin

Route::get('/', [OvqatController::class, 'index']);
Route::get('/ovqat-create', [OvqatController::class, 'create']);
Route::post('/create-ovqat', [OvqatController::class, 'store']);
Route::delete('/ovqat/{ovqat}', [OvqatController::class, 'delete']);


Route::get('/ovqat-update/{ovqat}', [OvqatController::class, 'update_ovqat']);
Route::put('/update/{ovqat}', [OvqatController::class, 'update']);
Route::get('/ovqat-search', [OvqatController::class, 'search']);



Route::get('/masalliq', [MasalliqController::class, 'index']);
Route::get('/masalliq-create', [MasalliqController::class, 'create']);
Route::post('/create-masalliq', [MasalliqController::class, 'store']);
Route::delete('/masalliq/{masalliq}', [MasalliqController::class, 'delete']);


Route::get('/masalliq-update/{masalliq}', [MasalliqController::class, 'update_masalliq']);
Route::put('/update_masalliq/{masalliq}', [MasalliqController::class, 'update']);
Route::get('/masalliq-search', [MasalliqController::class, 'search']);






















