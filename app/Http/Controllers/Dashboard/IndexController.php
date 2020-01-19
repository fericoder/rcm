<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class IndexController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
