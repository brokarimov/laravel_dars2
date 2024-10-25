<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorytStoreRequest;
use App\Http\Requests\PostStoreRequest;
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
    
    public function store(CategorytStoreRequest $request)
    {
        
        $category = new Category();
        $category->name=$request->name;
        $category->save();
        return redirect('/categories')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
    public function show($id)
    {
        $category = Category::find($id);
        
        return view('tables.showPages.category-show', ['category'=>$category]);
    }
}
