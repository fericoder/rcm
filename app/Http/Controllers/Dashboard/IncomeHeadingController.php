<?php

namespace App\Http\Controllers\Dashboard;

use App\IncomeHeading;
use Illuminate\Http\Request;

class IncomeHeadingController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      IncomeHeading::create([
          'user_id' =>  \Auth::user()->id,
          'complex_id' =>  \Auth::user()->complex_id,
          'name' => $request->name,
          'code' => $request->code


      ]);
      alert()->success('سرفصل درآمد با وفقیت اضافه شد', 'اضافه شد');
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IncomeHeading  $incomeHeading
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeHeading $incomeHeading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IncomeHeading  $incomeHeading
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeHeading $incomeHeading)
    {
          return view('dashboard.accounting.Incomeedit', compact('incomeHeading'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IncomeHeading  $incomeHeading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IncomeHeading $incomeHeading)
    {
      $incomeHeading->update([

        'user_id' =>  \Auth::user()->id,
        'complex_id' =>  \Auth::user()->complex_id,
        'name' => $request->name,
        'code' => $request->code


      ]);

      alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
      return redirect()->route('incomeHeading.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IncomeHeading  $incomeHeading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if (\Gate::denies('admin')) {
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }

      $incomeHeading = IncomeHeading::find($request->id);
      if ($incomeHeading->complex_id == \Auth::user()->complex_id){
          $incomeHeading->delete();
          alert()->success('سرفصل درآمد با موفقیت حذف شد', 'حذف شد');
          return redirect()->back();
      }else{
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }
    }
}
