<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('tables/categories', ['categories'=>$categories]);
    }
    public function category_create()
    {
        return view('tables.createPages.category-create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
        ]);
        $category = new Category();
        $category->name=$request->name;
        $category->save();
        return redirect('/categories');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
    public function show($id)
    {
        $category = Category::find($id);
        
        return view('tables.showPages.category-show', ['category'=>$category]);
    }
}
