<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function create(){
        return view('user.signup');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
                'name' => 'required|min:3',
                'email'=> 'required|email',
                'password'=>'required'
            
        ]);
       
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
     
        return redirect()->route('login');
    }



    public function login(){
        return view('user.login');
    }

    public function authenticate(Request $request){
     
        if(auth()->attempt([
                'email'=> $request->email,
                'password'=>$request->password
         ])){
            return redirect()->route('user.index');
        }
        else{
            return 'no';
        }
    }



    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
   

}
