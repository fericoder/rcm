<?php

namespace App\Http\Controllers\Dashboard;

use App\Cost;
use App\CostHeading;
use Illuminate\Http\Request;

class CostController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = Cost::where('complex_id', \Auth::user()->complex_id)->get();
        $costHeadings = CostHeading::where('complex_id', \Auth::user()->complex_id)->get();

         return view('dashboard.accounting.costs', compact('costs', 'costHeadings'));
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
      Cost::create([
          'user_id' =>  \Auth::user()->id,
          'complex_id' =>  \Auth::user()->complex_id,
          'title' => $request->title,
          'date' => $request->date,
          'amount' => $request->amount,
          'trackNumber' => $request->trackNumber,
          'description' => $request->description,
          'paymentMethod' => $request->paymentMethod,
          'attachment' => $request->attachment
      ]);
      alert()->success('سرفصل هزینه با موفقیت اضافه شد', 'اضافه شد');
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function show(Cost $cost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function edit(Cost $cost)
    {
        return view('dashboard.accounting.Costedit', compact('cost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cost $cost)
    {
      $cost->update([

        'user_id' =>  \Auth::user()->id,
        'complex_id' =>  \Auth::user()->complex_id,
        'title' => $request->title,
        'date' => $request->date,
        'amount' => $request->amount,
        'trackNumber' => $request->trackNumber,
        'description' => $request->description,
        'paymentMethod' => $request->paymentMethod,
        'attachment' => $request->attachment

      ]);

      alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
      return redirect()->route('costs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if (\Gate::denies('admin')) {
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }

      $cost = Cost::find($request->id);
      if ($cost->complex_id == \Auth::user()->complex_id){
          $cost->delete();
          alert()->success('سرفصل هزینه با موفقیت حذف شد', 'حذف شد');
          return redirect()->back();
      }else{
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }
    }
}
