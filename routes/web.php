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
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPostController;
use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;


Route::middleware(AdminCheck::class . ':user,create,read,update,delete,admin')->group(function (): void {
    Route::get('/', [StudentController::class, 'index'])->middleware('auth');
    Route::get('/posts', [PostController::class, 'index'])->middleware('auth');

});
Route::middleware(AdminCheck::class . ':create,admin')->group(function (): void {
    Route::get('/student-create', [StudentController::class, 'create'])->middleware('auth');
    Route::post('/create-student', [StudentController::class, 'store']);

    Route::get('/post-create', [PostController::class, 'create'])->middleware('auth');
    Route::post('/create-post', [PostController::class, 'store']);

});
Route::middleware(AdminCheck::class . ':update,admin')->group(function (): void {
    Route::get('/student-update/{student}', [StudentController::class, 'update_student'])->middleware('auth');
    Route::put('/update/{student}', [StudentController::class, 'update']);

    Route::get('/post-update/{post}', [PostController::class, 'update_post'])->middleware('auth');
    Route::put('/update_post/{post}', [PostController::class, 'update']);
});


// Post
Route::middleware(AdminCheck::class . ':delete,admin')->group(function (): void {

    Route::delete('/post/{post}', [PostController::class, 'delete']);
    Route::delete('/student/{student}', [StudentController::class, 'delete']);

});


// User Page
Route::get('/user-post', [UserPostController::class, 'index']);

// Login and Register
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);



Route::middleware(AdminCheck::class . ':admin')->group(function (): void {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user-update/{user}', [UserController::class, 'update_user'])->middleware('auth');
    Route::put('/update_user/{user}', [UserController::class, 'update']);

});

Route::middleware(AdminCheck::class . ':read,admin')->group(function (): void {
    Route::get('/student-show/{student}', [StudentController::class, 'show']);
    Route::get('/post-show/{post}', [PostController::class, 'show']);

});



