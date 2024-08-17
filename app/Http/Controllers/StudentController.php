<?php

namespace App\Http\Controllers;

use App\Traits\uploud_images;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    use uploud_images;


    public function index()
    {
        $students = Student::get();
        return view('student.index',compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }



    public function store(Request $request)
    {


        $path = $this->uploud_image($request, 'image', 'student');

        Student::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'image' => $path
        ]);


        return redirect()->route('students.index');
    }
}
