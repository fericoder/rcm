<?php

namespace App\Http\Controllers\Dashboard;

use App\Income;
use App\IncomeHeading;
use Illuminate\Http\Request;

class IncomeController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $incomes = Income::where('complex_id', \Auth::user()->complex_id)->get();
      $incomeHeadings = IncomeHeading::where('complex_id', \Auth::user()->complex_id)->get();

       return view('dashboard.accounting.incomes', compact('incomes','incomeHeadings'));
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

      $request->validate([
            'title' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'paymentMethod' => 'required',
            'trackNumber' => 'required',
            'date' => 'required',
            'attachment' => 'required'
        ]);

      Income::create([
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
      alert()->success('درآمد با موفقیت اضافه شد', 'اضافه شد');
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        return view('dashboard.accounting.Incomeedit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
      $income->update([

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
      return redirect()->route('incomes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if (\Gate::denies('admin')) {
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }

      $income = Income::find($request->id);
      if ($income->complex_id == \Auth::user()->complex_id){
          $income->delete();
          alert()->success('سرفصل درآمد با موفقیت حذف شد', 'حذف شد');
          return redirect()->back();
      }else{
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }
    }
}
