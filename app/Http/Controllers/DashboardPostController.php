<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    @return \Illuminate

    public function index()
    {
        return view('dashboard.posts.index');
    }
}