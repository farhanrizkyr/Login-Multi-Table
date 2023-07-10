<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
class RegisterAdminController extends Controller
{
  
    public function register()
   {
       return view('Admin.register');
   }

    public function post_register($value='')
   {
      request()->validate([
       'name'=>'required',
        'username'=>'required',
        'email'=>'required',
         'password'=>'required',

      ]);


     Admin::create([
      'name'=>request()->name,
      'username'=>request()->username,
      'email'=>request()->email,
      'password'=>Hash::make(request()->password),
      ]);
      return redirect('admin/login');
   }

}
