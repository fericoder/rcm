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
        return view('dashboard.configuration', compact('complex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complex  $complex
     * @return \Illuminate\Http\Response
     */
    public function show(Complex $complex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complex  $complex
     * @return \Illuminate\Http\Response
     */
    public function edit(Complex $complex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complex  $complex
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complex  $complex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complex $complex)
    {
        //
    }
}
