<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{

   public function __construct()
{
   $this->middleware('auth:admin');
}

   public function index()
   {
       return view('Admin.admin');
   }

    public function loginadmin()
   {
       return view('Admin.login');
   }
}
