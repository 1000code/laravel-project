<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function Calc()
    {
        return view('calc');
    }


    public function Home()
    {
        return view('user.home.home');
    }

    public function Update()
    {
        return view('user.home.update');
    }
}
