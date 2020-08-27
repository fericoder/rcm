<?php

namespace App\Http\Controllers\Dashboard;

use App\CostHeading;
use Illuminate\Http\Request;

class CostHeadingController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            'name' => 'required|min:3|max:255',
            'code' => 'required|min:3|max:255'
        ]);

        CostHeading::create([
            'user_id' =>  \Auth::user()->id,
            'complex_id' =>  \Auth::user()->complex_id,
            'name' => $request->name,
            'code' => $request->code,


        ]);
        alert()->success('سرفصل هزینه با موفقیت اضافه شد', 'اضافه شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CostHeading  $costHeading
     * @return \Illuminate\Http\Response
     */
    public function show(CostHeading $costHeading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CostHeading  $costHeading
     * @return \Illuminate\Http\Response
     */
    public function edit(CostHeading $costHeading)
    {
      return view('dashboard.accounting.CostHeadingedit', compact('costHeading'));
  }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CostHeading  $costHeading
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, CostHeading $costHeading)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'code' => 'required|min:3|max:255'
        ]);

        $costHeading->update([
        'user_id' =>  \Auth::user()->id,
        'complex_id' =>  \Auth::user()->complex_id,
        'name' => $request->name,
        'code' => $request->code
      ]);

      alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
      return redirect()->route('costs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CostHeading  $costHeading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if (\Gate::denies('admin')) {
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }

      $costHeading = CostHeading::find($request->id);
      if ($costHeading->complex_id == \Auth::user()->complex_id){
          $costHeading->delete();
          alert()->success('سرفصل هزینه با موفقیت حذف شد', 'حذف شد');
          return redirect()->back();
      }else{
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }
    }
}
