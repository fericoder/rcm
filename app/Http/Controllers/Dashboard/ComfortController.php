<?php

namespace App\Http\Controllers\Dashboard;

use App\Comfort;
use Illuminate\Http\Request;

class ComfortController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comforts = Comfort::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.comforts.index', compact('comforts'));
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
        Comfort::create([
            'user_id' =>  \Auth::user()->id,
            'complex_id' =>  \Auth::user()->complex_id,
            'title' => $request->title,
            'location' => $request->location,
            'responsible' => $request->responsible,
            'phone' => $request->phone,
        ]);
        alert()->success('واحد با موفقیت اضافه شد', 'اضافه شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function show(Comfort $comfort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function edit(Comfort $comfort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comfort $comfort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comfort $comfort)
    {
        //
    }
}
