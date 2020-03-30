<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\ProceedingRequest;
use App\Proceeding;
use Illuminate\Http\Request;

class ProceedingController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proceedings = Proceeding::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.proceedings.index', compact('proceedings'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProceedingRequest $request)
    {
        $file = $this->uploadFile($request->file);
        $date = substr($request->date, 0, 10);

        $proceeding = new Proceeding;
        $proceeding->date = date('Y-m-d H:i:s', (int)$date);
        $proceeding->type = $request->type;
        $proceeding->number = $request->number;
        $proceeding->file = $file;
        $proceeding->complex_id = \Auth::user()->complex_id;
        $proceeding->save();

        alert()->success('انجام شد', 'صورتجلسه با موفقیت اضافه شد.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proceeding $proceeding
     * @return \Illuminate\Http\Response
     */
    public function show(Proceeding $proceeding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proceeding $proceeding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proceeding = Proceeding::where('id', $id)->where('complex_id', \Auth::user()->complex_id)->first();
        return view('dashboard.proceedings.edit', compact('proceeding'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Proceeding $proceeding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proceeding $proceeding)
    {
        $date = substr($request->date, 0, 10);
        $date = date('Y-m-d' . ' H:i:s', $date);

        if ($request->file('file') != null){
            $file = $this->uploadFile($request->file('file'));
            $proceeding =  Proceeding::where('id', $request->id)->update(['date' => $date, 'number' => $request->number, 'file' => $file, 'type' => $request->type ]);
        }else{
            $proceeding =  Proceeding::where('id', $request->id)->update(['date' => $date, 'number' => $request->number, 'type' => $request->type ]);
        }


        alert()->success('درخواست شما با موفقیت انجام شد.', 'انجام شد');
        return redirect()->route('proceedings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proceeding $proceeding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        if (\Gate::denies('admin')) {
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

        $proceeding = Proceeding::find($request->id);
        if ($proceeding->complex_id == \Auth::user()->complex_id){
            $proceeding->delete();
            alert()->success('صورتجلسه با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

    }


}