<?php

namespace App\Http\Controllers\Dashboard;

use App\Traffic;
use Illuminate\Http\Request;

class TrafficController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.administration.traffic');
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
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function show(Traffic $traffic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function edit(Traffic $traffic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traffic $traffic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traffic  $traffic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traffic $traffic)
    {
        //
    }
}
