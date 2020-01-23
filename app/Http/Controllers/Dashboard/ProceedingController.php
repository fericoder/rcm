<?php

namespace App\Http\Controllers\Dashboard;

use App\Proceeding;
use Illuminate\Http\Request;

class ProceedingController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.proceedings');
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
     * @param  \App\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function show(Proceeding $proceeding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function edit(Proceeding $proceeding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proceeding $proceeding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proceeding  $proceeding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proceeding $proceeding)
    {
        //
    }
}
