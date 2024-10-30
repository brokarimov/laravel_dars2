<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\MasalliqController;
use App\Http\Controllers\OvqatController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// admin

Route::get('/', [UniversityController::class, 'index']);
Route::get('/university-create', [UniversityController::class, 'create']);
Route::post('/create-university', [UniversityController::class, 'store']);
Route::delete('/university/{university}', [UniversityController::class, 'delete']);


Route::get('/university-update/{university}', [UniversityController::class, 'update_university']);
Route::put('/update/{university}', [UniversityController::class, 'update']);
// Route::get('/ovqat-search', [OvqatController::class, 'search']);



Route::get('/faculty', [FacultyController::class, 'index']);
Route::get('/faculty-create', [FacultyController::class, 'create']);
Route::post('/create-faculty', [FacultyController::class, 'store']);
Route::delete('/faculty/{faculty}', [FacultyController::class, 'delete']);


Route::get('/faculty-update/{faculty}', [FacultyController::class, 'update_faculty']);
Route::put('/update_faculty/{faculty}', [FacultyController::class, 'update']);



Route::get('/major', [MajorController::class, 'index']);
Route::get('/major-create', [MajorController::class, 'create']);
Route::post('/create-major', [MajorController::class, 'store']);
Route::delete('/major/{major}', [MajorController::class, 'delete']);


Route::get('/major-update/{major}', [MajorController::class, 'update_major']);
Route::put('/update_major/{major}', [MajorController::class, 'update']);
























