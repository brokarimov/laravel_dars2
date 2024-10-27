<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        $users = User::orderBy('id', 'asc')->paginate(2);
        return view('tables/users', ['users' => $users]);
    }

    public function user_create()
    {
        return view('tables.createPages.user-create');
    }

    public function store(UserStoreRequest $request)
    {
        // dd($request->all());

        User::create($request->all());
        return redirect('/')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function delete(User $user)
    {
        // dd($user);
        $user->delete();
        return redirect('/')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function show(User $user)
    {
        return view('tables.showPages.user-show', ['user' => $user]);
    }
    public function update_user(User $user)
    {
        // dd($user);
        return view('tables.updatePages.user-update',['user'=>$user]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        
        $user->update($request->all());
        return redirect('/')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function search(Request $request)
    {
        $users = User::where('name','like','%'.$request->search.'%')->orderBy('id', 'asc')->paginate(2);
        return view('tables/users', ['users' => $users]);

    }
}
