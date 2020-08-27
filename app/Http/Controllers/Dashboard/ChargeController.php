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
        if( \Gate::allows('finance') OR \Gate::allows('admin') OR \Gate::allows('boardMember')) {
            $invoices = Invoice::with('user')->where('complex_id', \Auth::user()->complex_id)->get();
            $units = User::where('complex_id', \Auth::user()->complex_id)->get();
            return view('dashboard.accounting.charge', compact('invoices', 'units'));
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }

    }

    public function report()
    {
        if( \Gate::allows('finance') OR \Gate::allows('admin') OR \Gate::allows('boardMember')) {
            $units = User::where('complex_id', \Auth::user()->complex_id)->get();
            return view('dashboard.accounting.report', compact('units'));
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }

    }


    public function show(Request $request)
    {

        if( \Gate::allows('finance') OR \Gate::allows('admin') OR \Gate::allows('boardMember')) {
            $invoices = Invoice::with('user')->where('user_id', (int) $request->id)->get();
            $units = User::where('complex_id', \Auth::user()->complex_id)->get();

            return view('dashboard.accounting.report', compact('invoices', 'units'));
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }

    }


}
