<?php

namespace App\Http\Controllers\Dashboard;

use App\Proceeding;
use App\Enactment;
use App\Http\Requests\EnactmentRequest;
use App\User;
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
        $users = User::where('complex_id', \Auth::user()->complex_id)->get();
        $proceedings = Proceeding::where('complex_id', \Auth::user()->complex_id)->get();
        $enactments = Enactment::where('complex_id', \Auth::user()->complex_id)->get();
        $members = \DB::table('enactments')->where('complex_id', \Auth::user()->complex_id)->select('user_id', \DB::raw('count(*) as count'))->groupBy('user_id')->get();
        $status = \DB::table('enactments')->where('complex_id', \Auth::user()->complex_id)->select('status', \DB::raw('count(*) as count'))->groupBy('status')->get();
        return view('dashboard.enactments', compact('enactments', 'proceedings', 'users', 'members', 'status'));
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
    public function store(EnactmentRequest $request)
    {

        $complex_id = \Auth::user()->complex->id;
        $deadline =substr($request->deadline,0,10);

        $enactment = new Enactment;
        $enactment->complex_id = $complex_id;
        $enactment->proceeding_id = $request->proceeding_id;
        $enactment->number = $request->number;
        $enactment->description = $request->description;
        $enactment->user_id = $request->user_id;
        $enactment->deadline = date('Y-m-d H:i:s', (int)$deadline);
        $enactment->save();

        alert()->success('انجام شد', 'مصوبه با موفقیت اضافه شد.');
        return redirect()->back();
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
