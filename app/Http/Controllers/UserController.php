<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|max:255',

        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }

    public function show($id)
    {
        $user = User::find($id);
        
        return view('tables.showPages.user-show', ['user'=>$user]);
    }

}
