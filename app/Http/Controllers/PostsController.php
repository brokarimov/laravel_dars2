<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\LikeStoreRequest;
use App\Http\Requests\PostStoreRequest;
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

        return view('tables/posts', ['posts' => $posts, 'categories' => $categories]);
    }
    public function comments()
    {
        $comments = Comment::all();
        $posts = Post::all();
        return view('tables/comments', ['posts' => $posts, 'comments' => $comments]);
    }
    public function likes()
    {
        $likes = Like::all();
        $users = User::all();
        $posts = Post::all();

        return view('tables/likes', ['posts' => $posts, 'likes' => $likes, 'users' => $users]);
    }


    public function post_create()
    {
        $categories = Category::all();
        return view('tables.createPages.post-create', ['categories' => $categories]);
    }

    public function store(PostStoreRequest $request)
    {
        // dd($request->all());
        
        
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }
        // dd($data);
        Post::create($data);
        return redirect('/posts')->with('success', 'Ma\'lumot qo\'shildi!');
    }


    public function comment_create()
    {

        $posts = Post::all();
        return view('tables.createPages.comment-create', ['posts' => $posts]);
    }

    public function comment_store(CommentStoreRequest $request)
    {
        

        $data = $request->all();
        Comment::create($data);
        return redirect('/comments')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function like_create()
    {
        $posts = Post::all();
        $users = User::all();

        return view('tables.createPages.like-create', ['posts' => $posts, 'users' => $users]);
    }

    public function like_store(LikeStoreRequest $request)
    {
        
        $data = $request->all();
        Like::create($data);
        return redirect('/likes')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
    public function delete_comment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/comments')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
    public function delete_like($id)
    {
        $like = Like::find($id);
        $like->delete();
        return redirect('/likes')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
    public function show(Post $post)
    {
        // dd($post);
        return view('tables.showPages.post-show', ['post' => $post]);
    }
    public function show_comment($id)
    {
        $comment = Comment::find($id);
        $post = Post::find($comment->post_id);
        return view('tables.showPages.comment-show', ['post' => $post, 'comment' => $comment]);
    }
    public function show_like($id)
    {
        $like = Like::find($id);
        $post = Post::find($like->post_id);
        $user = User::find($like->user_id);
        return view('tables.showPages.like-show', ['user' => $user, 'post' => $post, 'like' => $like]);
    }
}
