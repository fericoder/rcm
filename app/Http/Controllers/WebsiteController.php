<?php

namespace App\Http\Controllers;

use App\Complex;
use App\Gallery;
use App\Massage;
use App\Personnel;
use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        if (request()->getHttpHost() === 'olympictower.ir') {$request->merge(['complex' => 'olympic']);}
        $complex = Complex::where('url', $request->complex)->first();
        $website = Website::where('complex_id', $complex->id)->first();
        $pictures = Gallery::where('complex_id', $complex->id)->orderBy('id', 'DESC')->limit(10)->get();
        $personnels = Personnel::where('complex_id', $complex->id)->orderBy('order', 'ASC')->get();
        return view('website.index', compact('complex', 'pictures', 'personnels', 'website'));
    }


    public function massage(Request $request)
    {
        $request->validate([
            'cciiiddd' => 'required',
            'fullName' => 'required',
            'phone' => 'required',
            'massage' => 'required',

        ]);

        Massage::create([
            'complex_id' => $request->cciiiddd,
            'fullName' => $request->fullName,
            'phone' => $request->phone,
            'massage' => $request->massage,
        ]);

        alert()->success('پیام شما باموفقیت ثبت شد', 'ثبت شد');
        return redirect()->back();
    }


}