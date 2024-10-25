<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\User2StoreRequest;
use App\Models\User2;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function users2()
    {
        $users2 = User2::all();
        return view('tables/users2', ['users2' => $users2]);
    }
    public function user2_create()
    {
        return view('tables.createPages.user2-create');
    }

    public function store(User2StoreRequest $request)
    {
        // dd($request->all());
        
        $user2 = new User2();
        $user2->name=$request->name;
        $user2->email=$request->email;
        $user2->save();
        return redirect('/users2')->with('success', 'Ma\'lumot qo\'shildi!');
    }
    public function delete($id)
    {
        $user2 = User2::find($id);
        $user2->delete();
        return redirect('/users2')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function show(User2 $user2)
    {
        // dd($user2);
        return view('tables.showPages.user2-show', ['user2'=>$user2]);
    }
}
