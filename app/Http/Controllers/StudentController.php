<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id', 'asc')->paginate(5);
        return view('pages.student', ['models'=>$students]);
    }
    public function create()
    {
        $students = Student::all();
        $users = User::all();
        return view('pages.create.student-create', ['students'=>$students, 'users'=>$users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'tel' =>'required|max:255',
            'address' =>'required|max:255',
            'image' => 'required|file|mimes:png,jpg,jpeg',
        ]);
        $data = $request->all();
        

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }

        Student::create($data);
        return redirect('/')->with('success', 'Ma\'lumot qo\'shildi!');
    }

    public function update_student(Student $student)
    {
        // dd($user);
       
        return view('pages.update.student-update', ['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|max:255',
            'tel' =>'required|max:255',
            'address' =>'required|max:255',
            'image' => 'required|file|mimes:png,jpg,jpeg',
        ]);
        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date('Y-m-d') . '_' . time() . '.' . $extension;
            $file->move('image_upload/', $filename);
            $data['image'] = 'image_upload/' . $filename;
        }
        // dd($university);
        $student->update($data);
        return redirect('/')->with('warning', 'Ma\'lumot yangilandi!');
    }

    public function delete(Student $student)
    {
        // dd($user);
        $student->delete();
        return redirect('/')->with('danger', 'Ma\'lumot o\'chirildi!');
    }

    public function show(Student $student)
    {
        return view('pages.show.student-show',['student'=>$student]);
    }
}
