<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\University;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $universities = University::all();
        
        $faculties = Faculty::orderBy('id', 'asc')->paginate(5);
        return view('pages.faculty', ['models' => $faculties]);
    }

    public function create()
    {
        $universities = University::all();
        return view('pages.create.faculty-create', ['universities'=>$universities]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'university_id'=>'required|exists:universities,id'
        ]);
        $data = $request->all();
        $faculty = Faculty::create($data);
        return redirect('/faculty')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_faculty(Faculty $faculty)
    {
        // dd($user);

        return view('pages.update.faculty-update', ['faculty' => $faculty]);
    }

    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = $request->all();
        // dd($university);
        $faculty->update($data);
        return redirect('/faculty')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(Faculty $faculty)
    {
        // dd($user);
        $faculty->delete();
        return redirect('/faculty')->with('danger', 'Ma\'lumot o\'chirildi!');
    }
}
