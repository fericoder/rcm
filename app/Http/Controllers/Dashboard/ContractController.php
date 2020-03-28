<?php

namespace App\Http\Controllers\Dashboard;

use App\Contract;
use Illuminate\Http\Request;

class ContractController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.contracts.index', compact('contracts'));
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
        Contract::create([
            'user_id' =>  \Auth::user()->id,
            'complex_id' =>  \Auth::user()->complex_id,
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'contractor' => $request->contractor,
            'from' => $request->from,
            'to' => $request->to,
            'file' => $request->file,
        ]);
        alert()->success('واحد با موفقیت اضافه شد', 'اضافه شد');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        //
    }
}
