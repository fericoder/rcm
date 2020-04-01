<?php

namespace App\Http\Controllers;

use App\VoteOption;
use Illuminate\Http\Request;

class VoteOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  \App\VoteOption  $voteOption
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $vote = Vote::where('id', $request->id)->where('complex_id', \Auth::user()->complex_id)->first();
        return view('dashboard.votes.options', compact('vote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VoteOption  $voteOption
     * @return \Illuminate\Http\Response
     */
    public function edit(VoteOption $voteOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VoteOption  $voteOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VoteOption $voteOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VoteOption  $voteOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoteOption $voteOption)
    {
        //
    }
}
