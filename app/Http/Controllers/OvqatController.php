<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Masalliq;
use App\Models\Ovqat;
use Illuminate\Http\Request;

class OvqatController extends Controller
{
    public function index()
    {
        $models = Ovqat::orderBy('id','asc')->paginate(5);
        // dd($models);
        return view('pages.ovqat', ['models' => $models]);
    }

    public function create()
    {
        $models = Masalliq::all();

        return view('pages.create.ovqat-create', ['models' => $models]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'ids' => 'array'
        ]);
        $data = $request->all();

        $ids = $data['ids'];
        unset($data['ids']);
        $ovqat = Ovqat::create($data);
        $ovqat->masalliqs()->attach($ids);

        return redirect('/')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_ovqat(Ovqat $ovqat)
    {
        // dd($user);
        $models = Masalliq::all();

        return view('pages.update.ovqat-update', ['ovqat' => $ovqat, 'models' => $models]);
    }

    public function update(Request $request, Ovqat $ovqat)
    {
        $request->validate([
            'name' => 'required|max:255',
            'ids' => 'array',
        ]);

        $data = $request->all();

        $ids = $data['ids'];
        unset($data['ids']);

        $ovqat->update($data);
        $ovqat->masalliqs()->sync($ids);

        return redirect('/')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(Ovqat $ovqat)
    {
        // dd($user);
        $ovqat->delete();
        return redirect('/')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function search(Request $request)
    {
        $models = Ovqat::where('name','like','%'.$request->search.'%')->orderBy('id', 'asc')->paginate(5);
        return view('pages.ovqat', ['models' => $models]);

    }
}
