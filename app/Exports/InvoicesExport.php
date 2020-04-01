<?php

namespace App\Exports;

use App\Invoice;
use App\Complex;
use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoicesExport implements FromView
{
    public function view(): View
    {
        $complex = Complex::where('id', \Auth::user()->complex_id)->first();
        $rows = $complex->users;
        return view('dashboard.invoices.excel', [
            'rows' => $rows,
        ]);
    }
}
