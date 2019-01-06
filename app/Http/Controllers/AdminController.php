<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }

    public function loginProcess(Request $request)
    {
        $username = $request->username;
        $password = hash($request->password);
    }

    public function index()
    {
        return view('admin/customer');
    }

    public function customerPage()
    {
        return view('admin/customer');
    }
}
