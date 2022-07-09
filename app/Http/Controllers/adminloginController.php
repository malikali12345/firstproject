<?php

namespace App\Http\Controllers;
use App\Models\adminlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class adminloginController extends Controller
{
    function adminlogged()
    {
        return view('admin_login');
    }
    function checkadmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required', //|min:5|max:12'
        ]);
        $user = adminlogin::where([
            'name' => $request->username,
            'password' => md5($request->password),
        ])->count();
        // dd($user);
        // exit();
        if ($user > 0) {
            $useradmin = adminlogin::where([
                'name' => $request->username,
                'password' => md5($request->password),
            ])->get();
            session(['adminloginId' => $useradmin]);
            // dd($useradmin);
            return redirect('admin');
        } else {
            return redirect('adminlogin')->with(
                'fail',
                'Invalid User name or Password!!'
            );
        }
    }
    function adminlogout()
    {
        if (Session::has('adminloginId')) {
            Session::pull('adminloginId');
            return redirect('adminlogin');
        }
    }
}
