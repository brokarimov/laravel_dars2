<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin/indexes/index');
    }
    public function index3()
    {
        return view('admin/indexes/index3');
    }
    public function index2()
    {
        return view('admin/indexes/index2');
    }
    public function widgets()
    {
        return view('admin/pages/widgets');
    }
    public function calendar()
    {
        return view('admin/pages/calendar');
    }
    public function gallery()
    {
        return view('admin/pages/gallery');
    }
    public function kanban()
    {
        return view('admin/pages/kanban');
    }
    public function topNav()
    {
        return view('admin/pages/layout/topNav');
    }
    public function boxed()
    {
        return view('admin/pages/layout/boxed');
    }
    public function chartJS()
    {
        return view('admin/pages/charts/chartJS');
    }
    public function flot()
    {
        return view('admin/pages/charts/flot');
    }
    public function inline()
    {
        return view('admin/pages/charts/inline');
    }
    public function uplot()
    {
        return view('admin/pages/charts/uplot');
    }
    public function buttons()
    {
        return view('admin/pages/UI/buttons');
    }
    public function general()
    {
        return view('admin/pages/UI/general');
    }
    public function icons()
    {
        return view('admin/pages/UI/icons');
    }
    public function sliders()
    {
        return view('admin/pages/UI/sliders');
    }
    public function general_elem()
    {
        return view('admin/pages/Forms/general_elem');
    }
    public function advanced()
    {
        return view('admin/pages/Forms/advanced');
    }
    public function validation()
    {
        return view('admin/pages/Forms/validation');
    }
    public function simple()
    {
        return view('admin/pages/tables/simple');
    }
    public function data()
    {
        return view('admin/pages/tables/data');
    }
    public function jsgrid()
    {
        return view('admin/pages/tables/jsgrid');
    }
}

