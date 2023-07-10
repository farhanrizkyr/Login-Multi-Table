<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginAdminController extends Controller
{
    public function logadmin()
    {
      return view('Admin.login');
    }


     public function login_admin(Request $request)
      {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin/dashboard');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function logout_admin( Request $request)
    {
        auth()->guard('admin')->logout();
         $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/admin/login');
    }
}
