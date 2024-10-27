<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// admin

Route::get('/', [UserController::class, 'users']);
Route::get('/user-create', [UserController::class, 'user_create']);
Route::post('/create-users', [UserController::class, 'store']);
Route::delete('/users/{user}', [UserController::class, 'delete']);
Route::get('/user-show/{user}', [UserController::class, 'show']);

Route::get('/user-update/{user}', [UserController::class, 'update_user']);
Route::put('/update/{user}', [UserController::class, 'update']);
Route::get('/user-search', [UserController::class, 'search']);




Route::get('/companies', [CompanyController::class, 'companies']);
Route::get('/company-update/{company}', [CompanyController::class, 'update_company']);
Route::put('/update_company/{com}', [CompanyController::class, 'company_update']);
Route::get('/company-search', [CompanyController::class, 'search']);

Route::get('/products2', [Product2Controller::class, 'products2']);
Route::get('/product2-update/{product}', [Product2Controller::class, 'update_product']);
Route::put('/update_product/{prod}', [Product2Controller::class, 'product_update']);
Route::get('/product-search', [Product2Controller::class, 'search']);


Route::get('/company-create', [CompanyController::class, 'company_create']);
Route::post('/create-company', [CompanyController::class, 'store']);
Route::delete('/company/{id}', [CompanyController::class, 'delete']);
Route::get('/company-show/{company}', [CompanyController::class, 'show']);

Route::post('/product2-create', [Product2Controller::class, 'product2_create']);
Route::post('/create-product2', [Product2Controller::class, 'store']);
Route::delete('/product2/{id}', [Product2Controller::class, 'delete']);
Route::get('/product2-show/{product2}', [Product2Controller::class, 'show']);




















