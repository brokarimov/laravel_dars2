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
Route::get('/',[UserController::class, 'users']);
Route::get('/users2',[User2Controller::class, 'users2']);

Route::get('/categories',[CategoryController::class, 'categories']);
Route::get('/companies',[CompanyController::class, 'companies']);

Route::get('/posts',[PostsController::class, 'posts']);
Route::get('/comments',[PostsController::class, 'comments']);
Route::get('/likes',[PostsController::class, 'likes']);
Route::get('/products',[ProductController::class, 'products']);
Route::get('/products2',[Product2Controller::class, 'products2']);

Route::get('/orders',[ProductController::class, 'orders']);


Route::get('/category-create',[CategoryController::class, 'category_create']);
Route::post('/create',[CategoryController::class, 'store']);
Route::delete('/category/{id}',[CategoryController::class, 'delete']);
Route::get('/category-show/{id}',[CategoryController::class, 'show']);


Route::get('/user-create',[UserController::class, 'user_create']);
Route::post('/create-user',[UserController::class, 'store']);
Route::delete('/user/{id}',[UserController::class, 'delete']);
Route::get('/user-show/{id}',[UserController::class, 'show']);



Route::get('/post-create',[PostsController::class, 'post_create']);
Route::post('/create-post',[PostsController::class, 'store']);
Route::delete('/post/{id}',[PostsController::class, 'delete']);
Route::get('/post-show/{post}',[PostsController::class, 'show']);



Route::get('/comment-create',[PostsController::class, 'comment_create']);
Route::post('/create-comment',[PostsController::class, 'comment_store']);
Route::delete('/comment/{id}',[PostsController::class, 'delete_comment']);
Route::get('/comment-show/{id}',[PostsController::class, 'show_comment']);



Route::get('/like-create',[PostsController::class, 'like_create']);
Route::post('/create-like',[PostsController::class, 'like_store']);
Route::delete('/like/{id}',[PostsController::class, 'delete_like']);
Route::get('/like-show/{id}',[PostsController::class, 'show_like']);



Route::get('/product-create',[ProductController::class, 'product_create']);
Route::post('/create-product',[ProductController::class, 'product_store']);
Route::delete('/product/{id}',[ProductController::class, 'delete']);
Route::get('/product-show/{product}',[ProductController::class, 'show']);


Route::get('/order-create',[ProductController::class, 'order_create']);
Route::post('/order-product',[ProductController::class, 'order_store']);
Route::delete('/order/{id}',[ProductController::class, 'delete_order']);
Route::get('/order-show/{id}',[ProductController::class, 'show_order']);



Route::get('/user2-create',[User2Controller::class, 'user2_create']);
Route::post('/create-users2',[User2Controller::class, 'store']);
Route::delete('/users2/{id}',[User2Controller::class, 'delete']);
Route::get('/user2-show/{user2}',[User2Controller::class, 'show']);

Route::get('/company-create',[CompanyController::class, 'company_create']);
Route::post('/create-company',[CompanyController::class, 'store']);
Route::delete('/company/{id}',[CompanyController::class, 'delete']);
Route::get('/company-show/{company}', [CompanyController::class, 'show']);

Route::post('/product2-create',[Product2Controller::class, 'product2_create']);
Route::post('/create-product2',[Product2Controller::class, 'store']);
Route::delete('/product2/{id}',[Product2Controller::class, 'delete']);
Route::get('/product2-show/{product2}', [Product2Controller::class, 'show']);




















