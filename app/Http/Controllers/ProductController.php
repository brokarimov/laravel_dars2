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



    public function product_create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('tables.createPages.product-create', ['users'=>$users, 'categories'=>$categories]);
    }
    
    public function product_store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'category_id'=>'required|exists:categories,id',
            'user_id'=>'required|exists:categories,id',
            'price'=>'required|max:255',
            'images'=>'required|max:255',
            'count'=>'required|max:255',

        ]);
        $data = $request->all();
        Product::create($data);
        return redirect('/products');
    }

    public function order_create()
    {
        $products = Product::all();
        $users = User::all();

        return view('tables.createPages.order-create', ['users'=>$users, 'products'=>$products]);
    }
    
    public function order_store(Request $request)
    {
        $request->validate([
            'user_id'=>'required|exists:users,id',
            'owner_id'=>'required|exists:users,id',
            'product_id'=>'required|exists:products,id',
            'count'=>'required|max:255',
            'status'=>'required',


        ]);
        $data = $request->all();
        Order::create($data);
        return redirect('/orders');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
    public function delete_order($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders');
    }
    public function show($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        $user = User::find($product->user_id);
        return view('tables.showPages.product-show', ['category'=>$category,'user'=>$user,'product'=>$product]);
    }
    public function show_order($id)
    {
        $order = Order::find($id);
        $product = Product::find($order->product_id);
        $user = User::find($order->user_id);
        $owner = User::find($order->owner_id);
        return view('tables.showPages.order-show', ['order'=>$order,'owner'=>$owner,'user'=>$user,'product'=>$product]);
    }
}

