<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::with('faculties.majors.groups.students')->orderBy('id', 'asc')->paginate(5);
        $universities->each(function ($university) {
            $university->faculty_count = $university->faculties->count();
        });
        
        return view('pages.university', ['models' => $universities]);
    }

    public function create()
    {
        return view('pages.create.university-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        $university = University::create($data);
        return redirect('/')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_university(University $university)
    {
        // dd($user);

        return view('pages.update.university-update', ['university' => $university]);
    }

    public function update(Request $request, University $university)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        // dd($university);
        $university->update($data);
        return redirect('/')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(University $university)
    {
        // dd($user);
        $university->delete();
        return redirect('/')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    // public function search(Request $request)
    // {
    //     $models = Ovqat::where('name','like','%'.$request->search.'%')->orderBy('id', 'asc')->paginate(5);
    //     return view('pages.ovqat', ['models' => $models]);

    // }
}