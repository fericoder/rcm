<?php

namespace App\Http\Controllers\Dashboard;

use App\Enactment;
use Illuminate\Http\Request;

class EnactmentController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.enactments');
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
     * @param  \App\Enactment  $enactment
     * @return \Illuminate\Http\Response
     */
    public function show(Enactment $enactment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enactment  $enactment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enactment $enactment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enactment  $enactment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enactment $enactment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enactment  $enactment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enactment $enactment)
    {
        //
    }
}
