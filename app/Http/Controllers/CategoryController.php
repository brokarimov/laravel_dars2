<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        
        $categories = Category::orderBy('id', 'asc')->paginate(5);
        return view('pages.category', ['models'=>$categories]);
    }
    public function create()
    {
        return view('pages.create.category-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        $category = Category::create($data);
        return redirect('/')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_category(Category $category)
    {
        // dd($user);

        return view('pages.update.category-update', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        // dd($university);
        $category->update($data);
        return redirect('/')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(Category $category)
    {
        // dd($user);
        $category->delete();
        return redirect('/')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
}
