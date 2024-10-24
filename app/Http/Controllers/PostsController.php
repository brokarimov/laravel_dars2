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
        $posts = Post::all();
        return view('tables/comments', ['posts'=>$posts,'comments'=>$comments]);
    }
    public function likes()
    {
        $likes = Like::all();
        $users = User::all();
        $posts = Post::all();

        return view('tables/likes', ['posts'=>$posts,'likes'=>$likes, 'users'=>$users]);
    }


    public function post_create()
    {
        $categories = Category::all();
        return view('tables.createPages.post-create', ['categories'=>$categories]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
            'category_id'=>'required|exists:categories,id',
            'body'=>'required|max:255',
            'likes'=>'required|max:255',
            'dislikes'=>'required|max:255',
        ]);
        $data = $request->all();
        Post::create($data);
        return redirect('/posts');
    }


    public function comment_create()
    {
        
        $posts = Post::all();
        return view('tables.createPages.comment-create', ['posts'=>$posts]);
    }
    
    public function comment_store(Request $request)
    {
        $request->validate([
            'text'=>'required|max:255',
            'post_id'=>'required|exists:categories,id',
            
        ]);
        
        $data = $request->all();
        Comment::create($data);
        return redirect('/comments');
    }

    public function like_create()
    {
        $posts = Post::all();
        $users = User::all();

        return view('tables.createPages.like-create', ['posts'=>$posts, 'users'=>$users]);
    }
    
    public function like_store(Request $request)
    {
        $request->validate([
            'post_id'=>'required|exists:categories,id',
            'user_id'=>'required|exists:categories,id',
            'is_active'=>'required|max:255'
            
        ]);
        $data = $request->all();
        Like::create($data);
        return redirect('/likes');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
    public function delete_comment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/comments');
    }
    public function delete_like($id)
    {
        $like = Like::find($id);
        $like->delete();
        return redirect('/likes');
    }
    public function show($id)
    {
        $post = Post::find($id);
        
        return view('tables.showPages.post-show', ['post'=>$post]);
    }
    public function show_comment($id)
    {
        $comment = Comment::find($id);
        $post = Post::find($comment->post_id);
        return view('tables.showPages.comment-show', ['post'=>$post,'comment'=>$comment]);
    }
    public function show_like($id)
    {
        $like = Like::find($id);
        $post = Post::find($like->post_id);
        $user = User::find($like->user_id);
        return view('tables.showPages.like-show', ['user'=>$user,'post'=>$post,'like'=>$like]);
    }
}
