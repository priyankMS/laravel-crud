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
    //    print_r($request->all());
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
       toastr()->success('Data has been saved successfully!');
       return redirect('/register/view');
    }

    public function term(){
        return view('term');
    }

   public function view_user(){
    $users = User::all();
    return view('user-output', ['users' => $users]);
    }

    public function edit_data(Request  $request ,$id){
      $request->validate([
         'name'=> 'required',
         'email'=>'required|email',
         'fpassword'=>'required',
       ]);
       $user  = User::find($id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password =  $request->fpassword;
       $user->save();
       return redirect('/register/view')->with('success','user  updated successfully');
    }

  public function destroy($id) {
    try {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect('/register/view')->with('success', 'User deleted successfully.');
    } catch (\Exception $e) {
        return redirect('/register/view')->with('error', 'Error deleting user: ' . $e->getMessage());
    }
}



}
