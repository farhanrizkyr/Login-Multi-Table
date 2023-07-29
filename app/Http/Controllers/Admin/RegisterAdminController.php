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
    $user=Admin::latest()->get();
       return view('Admin.register',compact('user'));
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
      return redirect('admin/register')->with('pesan','Data Berhasil Di Tambahkan');
   }

}
