<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Masalliq;
use Illuminate\Http\Request;

class MasalliqController extends Controller
{
    public function index()
    {
        $models = Masalliq::orderBy('id','asc')->paginate(5);
        return view('pages.masalliq', ['models' => $models]);
    }
    public function create()
    {


        return view('pages.create.masalliq-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        
        $data = $request->all();
        Masalliq::create($data);
        return redirect('/masalliq')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_masalliq(Masalliq $masalliq)
    {
        // dd($user);
        

        return view('pages.update.masalliq-update', ['masalliq' => $masalliq]);
    }

    public function update(Request $request, Masalliq $masalliq)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $data = $request->all();

        $masalliq->update($data);
        

        return redirect('/masalliq')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(Masalliq $masalliq)
    {
        // dd($user);
        $masalliq->delete();
        return redirect('/masalliq')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function search(Request $request)
    {
        $models = Masalliq::where('name','like','%'.$request->search.'%')->orderBy('id', 'asc')->paginate(5);
        return view('pages.masalliq', ['models' => $models]);

    }
}
