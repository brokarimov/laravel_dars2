<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// admin
Route::get('/',[UserController::class, 'users']);
Route::get('/categories',[CategoryController::class, 'categories']);
Route::get('/posts',[PostsController::class, 'posts']);
Route::get('/comments',[PostsController::class, 'comments']);
Route::get('/likes',[PostsController::class, 'likes']);
Route::get('/products',[ProductController::class, 'products']);
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
Route::get('/post-show/{id}',[PostsController::class, 'show']);



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
Route::get('/product-show/{id}',[ProductController::class, 'show']);


Route::get('/order-create',[ProductController::class, 'order_create']);
Route::post('/order-product',[ProductController::class, 'order_store']);
Route::delete('/order/{id}',[ProductController::class, 'delete_order']);
Route::get('/order-show/{id}',[ProductController::class, 'show_order']);







// Route::get('/index3',[AdminController::class, 'index3']);
// Route::get('/index2',[AdminController::class, 'index2']);
// Route::get('/widgets',[AdminController::class, 'widgets']);
// Route::get('/calendar',[AdminController::class, 'calendar']);
// Route::get('/gallery',[AdminController::class, 'gellery']);
// Route::get('/kanban',[AdminController::class, 'kanban']);
// Route::get('/topNav',[AdminController::class, 'topNav']);
// Route::get('/boxed',[AdminController::class, 'boxed']);
// Route::get('/chartJS',[AdminController::class, 'chartJS']);
// Route::get('/flot',[AdminController::class, 'flot']);
// Route::get('/inline',[AdminController::class, 'inline']);
// Route::get('/uplot',[AdminController::class, 'uplot']);
// Route::get('/buttons',[AdminController::class, 'buttons']);
// Route::get('/general',[AdminController::class, 'general']);
// Route::get('/icons',[AdminController::class, 'icons']);
// Route::get('/sliders',[AdminController::class, 'sliders']);
// Route::get('/general_elem',[AdminController::class, 'general_elem']);
// Route::get('/advanced',[AdminController::class, 'advanced']);
// Route::get('/validation',[AdminController::class, 'validation']);
// Route::get('/simple',[AdminController::class, 'simple']);
// Route::get('/data',[AdminController::class, 'data']);
// Route::get('/jsgrid',[AdminController::class, 'jsgrid']);

// User
// Route::get('/home1',[UserController::class, 'home1']);
// Route::get('/home2',[UserController::class, 'home2']);
// Route::get('/home3',[UserController::class, 'home3']);
// Route::get('/gridProducts',[UserController::class, 'gridProducts']);
// Route::get('/gridLeftSideBar',[UserController::class, 'gridLeftSideBar']);
// Route::get('/gridBannerSlider',[UserController::class, 'gridBannerSlider']);
// Route::get('/listProducts',[UserController::class, 'listProducts']);
// Route::get('/shoppingCart',[UserController::class, 'shoppingCart']);
// Route::get('/checkout',[UserController::class, 'checkout']);
// Route::get('/Contact',[UserController::class, 'Contact']);
// Route::get('/login',[UserController::class, 'login']);
// Route::get('/gridBlog',[UserController::class, 'gridBlog']);
// Route::get('/blogList',[UserController::class, 'blogList']);
// Route::get('/blogLeftSideBar',[UserController::class, 'blogLeftSideBar']);
// Route::get('/blogRightSideBar',[UserController::class, 'blogRightSideBar']);
// Route::get('/about',[UserController::class, 'about']);



















