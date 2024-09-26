<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class ValidationHelper
{
    public static function validateUser(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'fpassword' => 'required',
        ]);
    }
}
