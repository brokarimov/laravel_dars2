<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home1()
    {
        return view('user/Homes/home1');
    }
    public function home2()
    {
        return view('user/Homes/home2');
    }
    public function home3()
    {
        return view('user/Homes/home3');
    }
    public function gridProducts()
    {
        return view('user/Shop/gridProducts');
    }
    public function gridLeftSideBar()
    {
        return view('user/Shop/gridLeftSideBar');
    }
    public function gridBannerSlider()
    {
        return view('user/Shop/gridBannerSlider');
    }
    public function listProducts()
    {
        return view('user/Shop/listProducts');
    }
    public function shoppingCart()
    {
        return view('user/Pages/shoppingCart');
    }
    public function checkout()
    {
        return view('user/Pages/checkout');
    }
    public function Contact()
    {
        return view('user/Pages/Contact');
    }
    public function login()
    {
        return view('user/Pages/login');
    }
    public function gridBlog()
    {
        return view('user/Blog/gridBlog');
    }
    public function blogList()
    {
        return view('user/Blog/blogList');
    }
    public function blogLeftSideBar()
    {
        return view('user/Blog/blogLeftSideBar');
    }
    public function blogRightSideBar()
    {
        return view('user/Blog/blogRightSideBar');
    }
    public function about()
    {
        return view('user/about');
    }

}
