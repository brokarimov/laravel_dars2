<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\University;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $universities = University::all();
        $majors = Major::orderBy('id', 'asc')->paginate(5);
        return view('pages.major', ['models' => $majors,'universities' => $universities]);
    }

    public function create()
    {
        $universities = University::all();
        $faculties = Faculty::all();
        $majors = Major::orderBy('id', 'asc')->paginate(5);

        return view('pages.create.major-create', ['universities'=>$universities,'faculties'=>$faculties]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'faculty_id'=>'required|exists:faculties,id'
        ]);
        $data = $request->all();
        Major::create($data);
        return redirect('/major')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_major(Major $major)
    {
        // dd($user);

        return view('pages.update.major-update', ['major' => $major]);
    }

    public function update(Request $request, Major $major)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        // dd($university);
        $major->update($data);
        return redirect('/major')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(Major $major)
    {
        // dd($user);
        $major->delete();
        return redirect('/major')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
}
