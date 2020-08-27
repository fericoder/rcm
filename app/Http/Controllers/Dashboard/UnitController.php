<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\UnitRequest;
use App\Http\Requests\Units;
use App\Invoice;
use App\Penalty;
use App\Unit;
use App\User;
use App\Warning;
use Illuminate\Http\Request;

class UnitController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( \Gate::allows('finance') OR \Gate::allows('admin') OR \Gate::allows('boardMember')) {
            $units = User::where('complex_id', \Auth::user()->complex_id)->where('userType', 'unit')->get();
            return view('dashboard.units.index', compact('units'));
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\Gate::allows('admin')) {
            return view('dashboard.units.create');
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( \Gate::allows('admin')) {
            $data = $request->except('_token');
            $data['complex_id'] = \Auth::user()->complex_id;

            $unit = User::create($data);
            alert()->success('واحد باموفقیت اضافه شد', 'انجام شد');
            return redirect()->route('units.index');
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if( \Gate::allows('finance') OR \Gate::allows('admin') OR \Gate::allows('boardMember')) {
            $unit = User::where('id', $id)->first();
            $invoices = Invoice::where('user_id', $id)->get();
            $penalties = Penalty::where('user_id', $id)->get();
            return view('dashboard.units.show', compact('unit', 'invoices', 'penalties'));
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
