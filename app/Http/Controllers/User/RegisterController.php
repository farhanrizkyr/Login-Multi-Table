<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class RegisterController extends Controller
{
    public function index()
   {
       return view('User.register');
   }


   public function create($value='')
   {
      request()->validate([
       'name'=>'required',
        'username'=>'required',
        'email'=>'required',
         'password'=>'required',

      ]);


      User::create([
      'name'=>request()->name,
      'username'=>request()->username,
      'email'=>request()->email,
      'password'=>Hash::make(request()->password),
      ]);
      return redirect('user/login');
   }
}
