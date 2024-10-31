<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\MasalliqController;
use App\Http\Controllers\OvqatController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

// Category
Route::get('/', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/category-create', [CategoryController::class, 'create'])->middleware('auth');
Route::post('/create-category', [CategoryController::class, 'store']);
Route::delete('/category/{category}', [CategoryController::class, 'delete']);
Route::get('/category-update/{category}', [CategoryController::class, 'update_category'])->middleware('auth');
Route::put('/update/{category}', [CategoryController::class, 'update']);
// Route::get('/ovqat-search', [OvqatController::class, 'search']);


// Post
Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('/post-create', [PostController::class, 'create'])->middleware('auth');
Route::post('/create-post', [PostController::class, 'store']);
Route::delete('/post/{post}', [PostController::class, 'delete']);
Route::get('/post-update/{post}', [PostController::class, 'update_post'])->middleware('auth');
Route::put('/update_post/{post}', [PostController::class, 'update']);

// User Page
Route::get('/user-post', [UserPostController::class, 'index']);


// Login and Register


Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);

















