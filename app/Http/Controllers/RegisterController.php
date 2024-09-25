<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register');
    }

    public function register(Request $request){
       print_r($request->all());
       $request->validate([
         'name'=> 'required',
         'email'=>'required|email|unique:users',
         'fpassword'=>'required',
       ]);
       //initilize user object 
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password =  $request->fpassword;
       $user->save();

       return redirect('/register/view');
    }

    public function term(){
        return view('term');
    }

    public function view_user(){
     $users = User::all();
     $data = compact($users);
     return view('user-output')->with($data);
    }
}
