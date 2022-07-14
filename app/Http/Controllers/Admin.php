<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function panel()
    {
        return view('admin.panel');
    }

    /*public function view_user()
    {
        return view('admin.users');
    }*/
}
