<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Input;

class UserController extends Controller
{
    public function register()
    {
        return view('signup');
    }

    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->username = $request->username;        
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return redirect()->route('login')->with('success', 'Register successfully');
        // return back()->with('success', 'Register successfully');
    }
 
    public function login()
    {
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    
}
