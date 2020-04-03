<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\VoteRequest;
use App\Vote;
use App\VoteOption;
use App\VotePoll;
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
        $date = substr($request->expired_at, 0, 10);
        $date = date('Y-m-d' . ' H:i:s', $date);

        $vote = new Vote;
        $vote->title = $request->title;
        $vote->question = $request->question;
        $vote->expired_at = $date;
        $vote->user_id = \Auth::user()->id;
        $vote->complex_id = \Auth::user()->complex_id;
        $vote->save();


        alert()->success('انجام شد', 'نظرسنجی با موفقیت اضافه شد.');
        return redirect()->route('votes.index');
    }


    public function optionsStore(Request $request)
    {
        $request->validate([
            'vote_id' => 'required|exists:votes,id,complex_id,' .\Auth::user()->complex_id,
            'title' => 'required',

        ]);

        VoteOption::create([
            'vote_id' => $request->vote_id,
            'complex_id' => \Auth::user()->complex_id ,
            'user_id' => \Auth::user()->id ,
            'title' => $request->title,
        ]);


        alert()->success('انجام شد', 'نظرسنجی با موفقیت اضافه شد.');
        return redirect()->route('options.index',$request->vote_id );
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

            $vote = Vote::where('id', $request->id)->where('complex_id', \Auth::user()->complex_id)->first();
            $polls = \DB::table('votes_polls')->select('option_id', \DB::raw('count(*) as total'))->where('vote_id', $request->id)->where('complex_id', \Auth::user()->complex_id)->groupBy('option_id')->get();
            $pollsCount = VotePoll::where('complex_id', \Auth::user()->complex_id)->where('vote_id', $request->id)->count();
            $pollsUsers = VotePoll::where('complex_id', \Auth::user()->complex_id)->where('vote_id', $request->id)->get();
            return view('dashboard.votes.report', compact('polls', 'vote', 'pollsCount', 'pollsUsers'));
        }

        $id = \DB::table('votes_polls')->insertGetId([
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'vote_id' => $request->id,
            'option_id' => $request->selectedOption,
            'created_at' => now(),
        ]);
        alert()->success('نظر شما در نظرسنجی ثبت شد', 'ثبت شد');

        $vote = Vote::where('id', $request->id)->where('complex_id', \Auth::user()->complex_id)->first();
        $polls = \DB::table('votes_polls')->select('option_id', \DB::raw('count(*) as total'))->where('vote_id', $request->id)->where('complex_id', \Auth::user()->complex_id)->groupBy('option_id')->get();
        $pollsCount = VotePoll::where('complex_id', \Auth::user()->complex_id)->where('vote_id', $request->id)->count();
        $pollsUsers = VotePoll::where('complex_id', \Auth::user()->complex_id)->where('vote_id', $request->id)->get();
        return view('dashboard.votes.report', compact('polls', 'vote', 'pollsCount', 'pollsUsers'));


    }

    public function report(Request $request)
    {
        $vote = Vote::where('id', $request->id)->where('complex_id', \Auth::user()->complex_id)->first();
        $polls = \DB::table('votes_polls')->select('option_id', \DB::raw('count(*) as total'))->where('vote_id', $request->id)->where('complex_id', \Auth::user()->complex_id)->groupBy('option_id')->get();
        $pollsCount = VotePoll::where('complex_id', \Auth::user()->complex_id)->where('vote_id', $request->id)->count();
        $pollsUsers = VotePoll::where('complex_id', \Auth::user()->complex_id)->where('vote_id', $request->id)->get();
       return view('dashboard.votes.report', compact('polls', 'vote', 'pollsCount', 'pollsUsers'));
    }


    public function voteDelete(Request $request)
    {
        if (\Gate::denies('admin')) {
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

        $vote = Vote::find($request->id);
        if ($vote->complex_id == \Auth::user()->complex_id){
            $vote->delete();
            alert()->success('نظرسنجی با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

    }


    public function optionsDelete(Request $request)
    {
        if (\Gate::denies('admin')) {
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

        $voteOption = VoteOption::find($request->id);
        if ($voteOption->complex_id == \Auth::user()->complex_id){
            $voteOption->delete();
            alert()->success('گزینه با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

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
