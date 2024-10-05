<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    use ResponseTrait ;
    public function index(){
        $students = Student::get();
        return $this->ApiResponse($students , 'ok' , 200) ;
    }

    public function show($id){
        $student = Student::find($id);
        return $this->ApiResponse($student , 'ok' , 200) ;
    }

    public function store(Request $req){
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,15',
            'image'=> 'required'
        ]);
        if($validator->fails()){
        return $this->ApiResponse(null ,$validator->errors(), 400) ;
        }
        $student = Student::create($req->all());
        if($student){
            return $this->ApiResponse($student , 'Saved' , 201) ;
        }
        return $this->ApiResponse(null , 'Not Saved' , 400) ;
    }

    public function update(Request $req,$id){
       
        $validator = Validator::make($req->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,15',
        ]);
        if($validator->fails()){
        return $this->ApiResponse(null ,$validator->errors(), 400) ;
        }

        $student = Student::find($id);
        if(!$student)return $this->ApiResponse(null , 'Not Found' , 404) ;

        $student->update($req->all());
        if($student){
            return $this->ApiResponse($student , 'Saved' , 201) ;
        }
        return $this->ApiResponse(null , 'Not Saved' , 400) ;
    }


    public function destroy($id){
        $student = Student::find($id);
        if (!$student) {
            return $this->ApiResponse(null, 'Not Found', 404);
        }

        $student->delete();

        if($student){
                return $this->ApiResponse($student , 'Deleted' , 201) ;
            }
        return $this->ApiResponse(null , 'Not Deleted' , 400) ;
    }
}
