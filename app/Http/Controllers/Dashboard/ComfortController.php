<?php

namespace App\Http\Controllers\Dashboard;

use App\Comfort;
use Illuminate\Http\Request;

class ComfortController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comforts = Comfort::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.comforts.index', compact('comforts'));
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
        Comfort::create([
            'user_id' =>  \Auth::user()->id,
            'complex_id' =>  \Auth::user()->complex_id,
            'title' => $request->title,
            'location' => $request->location,
            'responsible' => $request->responsible,
            'phone' => $request->phone,
        ]);
        alert()->success('واحد با موفقیت اضافه شد', 'اضافه شد');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function show(Comfort $comfort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function edit(Comfort $comfort)
    {

            return view('dashboard.comforts.edit', compact('comfort'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comfort $comfort)
    {
        $comfort->update([

              'user_id' =>  \Auth::user()->id,
              'complex_id' =>  \Auth::user()->complex_id,
              'title' => $request->title,
              'location' => $request->location,
              'responsible' => $request->responsible,
              'phone' => $request->phone,

            ]);

            alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
            return redirect()->route('comfort.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comfort  $comfort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if (\Gate::denies('admin')) {
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }

      $comfort = Comfort::find($request->id);
      if ($comfort->complex_id == \Auth::user()->complex_id){
          $comfort->delete();
          alert()->success('واحد با موفقیت حذف شد', 'حذف شد');
          return redirect()->back();
      }else{
          alert()->warning('عدم دسترسی');
          return redirect()->back();
      }
    }
}
