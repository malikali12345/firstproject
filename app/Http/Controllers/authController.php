<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
// use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
use Session;

class authController extends Controller
{
    function loginpage()
    {
        return view('sign_in');
    }
    function registerpage()
    {
        return view('sign_up');
    }
    function login(Request $request)
    {
        // dd($request->all());
        //validate data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user = register::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('home');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    function register(Request $request)
    {
        //validate data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:registers',
            'password' => 'required|min:5|max:12',
        ]);
        $register = new register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $res = $register->save();
        if ($res) {
            return back()->with('success', 'You Have Registered Successfully');
        } else {
            return back()->with('fail', 'Something  wrong');
        }
    }
    function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('home');
        }
    }
}
