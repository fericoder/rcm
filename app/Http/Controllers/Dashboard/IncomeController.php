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

        foreach ($incomeHeadings as $incomeHeading) {
            $headingName = $incomeHeading->name;
            $headingId = $incomeHeading->id;
            $headingsSum["$headingName"] = \App\Income::where('income_headings_id', $headingId)->sum('amount');
        }
        $maxIncomeHeading = array_keys($headingsSum, max($headingsSum));
        $maxIncomePrice = max($headingsSum);


        return view('dashboard.accounting.incomes', compact('incomes','incomeHeadings', 'maxIncomeHeading', 'maxIncomePrice', 'headingsSum'));
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
        $request->merge([
            'amount' => $this->fa2en($request->amount),
        ]);

        $request->validate([
            'description' => 'required',
            'income_headings_id' => 'required',
            'amount' => 'required|numeric',
            'paymentMethod' => 'nullable',
            'trackNumber' => 'nullable',
            'date' => 'required',
            'attachment' => 'nullable|mimes:jpeg,JPEG,png,PNG,pdf,excel,doc,docx'
        ]);


        if ($request->file('attachment')){
            $attachment = $this->uploadFile($request->file('attachment'));
        }else{
            $attachment = '';
        }


        $date = substr($request->date, 0, 10);
        $incomeDate = date('Y-m-d H:i:s', (int) $date) ;


        Income::create([
            'user_id' =>  \Auth::user()->id,
            'complex_id' =>  \Auth::user()->complex_id,
            'income_headings_id' => $request->income_headings_id,
            'date' => $incomeDate,
            'amount' => $request->amount,
            'trackNumber' => $request->trackNumber,
            'description' => $request->description,
            'paymentMethod' => $request->paymentMethod,
            'attachment' => $attachment
        ]);
        alert()->success(' درآمد با موفقیت اضافه شد', 'اضافه شد');
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
        $request->merge([
            'amount' => $this->fa2en($request->amount),
        ]);

        $request->validate([
            'description' => 'required',
            'income_headings_id' => 'required',
            'amount' => 'required|numeric',
            'paymentMethod' => 'nullable',
            'trackNumber' => 'nullable',
            'date' => 'required',
            'attachment' => 'nullable|mimes:jpeg,JPEG,png,PNG,pdf,excel,doc,docx'
        ]);

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
