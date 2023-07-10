<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __construct($foo = null)
    {
        $this->middleware('auth');
    }
    public function index()
   {
       return view('User.user');
   }
}
