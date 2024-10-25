<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('tables/users', ['users' => $users]);
    }

    public function user_create()
    {
        return view('tables.createPages.user-create');
    }

    public function store(UserStoreRequest $request)
    {
        // dd($request->all());
        
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function show($id)
    {
        $user = User::find($id);
        
        return view('tables.showPages.user-show', ['user'=>$user]);
    }

}
