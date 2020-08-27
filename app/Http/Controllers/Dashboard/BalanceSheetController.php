<?php

namespace App\Http\Controllers\Dashboard;

use App\Cost;
use App\CostHeading;
use App\Income;
use App\IncomeHeading;
use Illuminate\Http\Request;

class BalanceSheetController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $costHeadings = CostHeading::where('complex_id', \Auth::user()->complex_id)->get();
        $costs = Cost::where('complex_id', \Auth::user()->complex_id)->get();

        $incomeHeadings = IncomeHeading::where('complex_id', \Auth::user()->complex_id)->get();
        $incomes = Income::where('complex_id', \Auth::user()->complex_id)->get();

        return view('dashboard.accounting.balance-sheet', compact('costHeadings', 'costs', 'incomeHeadings', 'incomes'));
    }
}
