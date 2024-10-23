<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::all();
        $users = User::all();
        $categories = Category::all();
        return view('tables/products', ['products'=>$products, 'users'=>$users, 'categories'=>$categories]);
    }
    public function orders()
    {
        $products = Product::all();
        $users = User::all();
        $orders = Order::all();

        return view('tables/orders', ['products'=>$products, 'users'=>$users, 'orders'=>$orders]);
    }
}
