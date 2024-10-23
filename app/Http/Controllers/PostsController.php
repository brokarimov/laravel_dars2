<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;

use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts()
    {
        $posts = Post::all();
        $categories = Category::all();
        
        return view('tables/posts', ['posts'=>$posts, 'categories'=>$categories]);
    }
    public function comments()
    {
        $comments = Comment::all();
        return view('tables/comments', ['comments'=>$comments]);
    }
    public function likes()
    {
        $likes = Like::all();
        $users = User::all();
        return view('tables/likes', ['likes'=>$likes, 'users'=>$users]);
    }
}
