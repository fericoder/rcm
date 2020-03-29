<?php

namespace App\Http\Controllers;

use App\Complex;
use App\Gallery;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        $complex = Complex::where('url', $request->complex)->first();
        $pictures = Gallery::where('complex_id', $complex->id)->orderBy('id', 'DESC')->limit(10)->get();
        return view('website.index', compact('complex', 'pictures'));
    }


}