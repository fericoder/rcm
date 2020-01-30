<?php

namespace App\Http\Controllers\Dashboard;

use App\Invoice;
use App\User;
use Illuminate\Http\Request;

class ChargeController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::with('user')->where('complex_id', \Auth::user()->complex_id)->get();
        $units = User::where('complex_id', \Auth::user()->complex_id)->get();

        return view('dashboard.accounting.charge', compact('invoices', 'units'));
    }

    public function report()
    {
        $units = User::where('complex_id', \Auth::user()->complex_id)->get();

        return view('dashboard.accounting.report', compact('units'));
    }


    public function show(Request $request)
    {

        $invoices = Invoice::with('user')->where('user_id', (int) $request->id)->get();
        $units = User::where('complex_id', \Auth::user()->complex_id)->get();

        return view('dashboard.accounting.report', compact('invoices', 'units'));
    }


}
