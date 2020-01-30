<?php

namespace App\Http\Controllers\Dashboard;

use App\PermissionRequest;
use Illuminate\Http\Request;

class PermissionRequestController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.administration.permission-requests');
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
     * @param  \App\PermissionRequest  $permissionRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionRequest $permissionRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PermissionRequest  $permissionRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionRequest $permissionRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PermissionRequest  $permissionRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermissionRequest $permissionRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PermissionRequest  $permissionRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionRequest $permissionRequest)
    {
        //
    }
}
