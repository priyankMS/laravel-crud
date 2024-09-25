<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index($name=null){
        echo "this is calling";
        return "public controller"." "."$name";
    }

    public function showID($id=""){
        return view('homePage')->with(['id'=>$id]);
    }
}
