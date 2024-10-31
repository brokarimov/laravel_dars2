<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'asc')->paginate(5);
        return view('pages.post', ['models'=>$posts]);
    }
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('pages.create.post-create', ['categories'=>$categories, 'users'=>$users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' =>'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',
            'category_id'=>'required|exists:categories,id',
            'user_id'=>'required|exists:users,id'
        ]);
        $data = $request->all();
        

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }

        Post::create($data);
        return redirect('/posts')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_post(Post $post)
    {
        // dd($user);
        $categories = Category::all();
        $users = User::all();
        return view('pages.update.post-update', ['post' => $post,'categories' => $categories,'users' => $users]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' =>'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',
            'category_id'=>'required|exists:categories,id',
            'user_id'=>'required|exists:users,id'
        ]);
        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }
        // dd($university);
        $post->update($data);
        return redirect('/posts')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(Post $post)
    {
        // dd($user);
        $post->delete();
        return redirect('/posts')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
}
