<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('app.index');
    }


    public function about()
    {
        return view('app.about');
    }



    public function contact()
    {
        return view('app.contact');
    }



    public function services()
    {
        return view('app.services');

    }



}
