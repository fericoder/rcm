<?php

namespace App\Http\Controllers\Dashboard;

use App\Complex;
use App\Http\Requests\ComplexRequest;
use Illuminate\Http\Request;

class ComplexController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complex = \Auth::user()->complex;
        return view('dashboard.configuration.configuration', compact('complex'));
    }


    public function WebsiteForm()
    {
        $complex = \Auth::user()->complex;
        return view('dashboard.configuration.website', compact('complex'));

    }


    public function update(ComplexRequest $request, Complex $complex)
    {
        $complex = Complex::find($request->id);
        $complex->units = $request->units;
        $complex->address = $request->address;
        $complex->type = $request->type;
        $complex->save();

        alert()->success('اطلاعات مجتمع ثبت شد.', 'ثبت شد');
        return redirect()->route('units.index');

    }


}
