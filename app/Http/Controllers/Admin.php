<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function panel()
    {
        return view('admin.panel');
    }

    public function view_user()
    {
        return view('admin.users');
    }

    public function tasks()
    {
        return view('admin.tasks');
    }

    public function categories()
    {
        return view('admin.categories');
    }
}
