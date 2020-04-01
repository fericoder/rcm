<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\VoteRequest;
use App\Vote;
use App\VoteOption;
use Illuminate\Http\Request;

class VoteController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votes = Vote::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.votes.index', compact('votes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.votes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoteRequest $request)
    {
        $vote = new Vote;
        $vote->title = $request->title;
        $vote->question = $request->question;
        $vote->user_id = \Auth::user()->id;
        $vote->complex_id = \Auth::user()->complex_id;
        $vote->save();

        $vote->voteOptions()->associate([$request->options]);

        alert()->success('انجام شد', 'نظرسنجی با موفقیت اضافه شد.');
        return redirect()->route('votes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        return view('dashboard.votes.show', compact('vote'));
    }

    public function submit(Request $request)
    {
        if(\DB::table('votes_polls')->select('id')->where('user_id', \Auth::user()->id)->where('vote_id', $request->id)->count() >= 1){
            alert()->error('شما در این نظرسنجی شرکت کرده اید');
            return redirect()->back();
            exit;
        }

        $id = \DB::table('votes_polls')->insertGetId([
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'vote_id' => $request->id,
            'option_id' => $request->selectedOption,
            'created_at' => now(),
        ]);
        alert()->success('نظر شما در نظرسنجی ثبت شد', 'ثبت شد');
        return redirect()->back();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }

    public function optionsIndex(Request $request)
    {
        $vote = Vote::where('id', $request->id)->where('complex_id', \Auth::user()->complex_id)->first();
        return view('dashboard.votes.options', compact('vote'));
    }
}
