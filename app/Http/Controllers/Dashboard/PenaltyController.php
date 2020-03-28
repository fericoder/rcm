<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Penalty;

class PenaltyController extends \App\Http\Controllers\Controller
{
    public function edit(Penalty $penalty)
    {
        return view('dashboard.penalties.edit', compact('penalty'));

    }

    public function update(Request $request, Penalty $penalty)
    {
        $penalty->date = $request->date;
        $penalty->time = $request->time;
        $penalty->type = $request->type;
        $penalty->save();

        alert()->success('تغییر جریمه انجام شد.', 'انجام شد');
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $penalty = Penalty::create([
            'date' => $request->date,
            'time' => $request->time,
            'added_by' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'user_id' => $request->user_id,
            'type' => $request->type,
            'description' => $request->description,
        ]);

        alert()->success('جریمه با موفقیت ثبت شد', 'ثبت شد');

        return redirect()->back();

    }


    public function destroy(Request $request)
    {

        if (\Gate::denies('admin')) {
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }


        $penalty = Penalty::find($request->id);
        if ($penalty->complex_id == \Auth::user()->complex_id){
            $penalty->delete();
            alert()->success('جریمه با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

    }
}
