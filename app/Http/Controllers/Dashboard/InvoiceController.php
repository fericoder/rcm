<?php

namespace App\Http\Controllers\Dashboard;

use App\Complex;
use App\Http\Requests\InvoiceUpdateRequest;
use App\Imports\InvoicesImport;
use App\Invoice;
use App\User;
use Illuminate\Http\Request;
use App\Exports\InvoicesExport;

class InvoiceController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.invoices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = User::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.invoices.create', compact('units'));
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
            'code' => 'required',
            'for' => 'required',
            'amount' => 'required',
            'units' => 'required',
        ]);

        $units = $request->units;
        foreach ($units as $unit){
            $user = User::find($unit);
            if ($user->complex_id != \Auth::user()->complex_id){
                continue;
            }
            else{
                Invoice::create([
                    'code' => $request->code,
                    'for' => $request->for,
                    'amount' => $this->fa2en($request->amount),
                    'user_id' => $user->id,
                    'complex_id' => \Auth::user()->complex_id,
                    'status' => 'notPaid',

                ]);
            }
        }
        alert()->success('صورتحساب با موفقیت ایجاد شد.', 'انجام شد');
        return redirect()->back();

    }

    public function downloadExcel()
    {
        return \Excel::download(new InvoicesExport, 'invoices.xlsx');
    }


    public function uploadExcel(Request $request)
    {
        $validatedData = $request->validate([
            'excel' => 'required|mimes:xlsx',
        ]);

        $path = $request->file('excel')->storeAs('excel', 'invoice' . '-' . $request->user()->id . '-' . time() . '.xlsx');
        $file = storage_path('app/' . $path);

        $id = \DB::table('excels')->insertGetId([
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'type' => 'invoice',
            'file' => $file,
            'done' => '0',
        ]);

        $invoices = \Excel::toArray(new InvoicesImport, $file);
        return view('dashboard.invoices.approve', compact('invoices', 'id'));
    }


    public function excelApprove(Request $request)
    {
        $excel = \DB::table('excels')->select('file', 'complex_id', 'user_id')->where('id', $request->id)->first();

        if ($excel->complex_id != \Auth::user()->complex_id OR $excel->user_id != \Auth::user()->id){
            alert()->warning('عدم دسترسی');
            $units = User::where('complex_id', \Auth::user()->complex_id)->get();
            return view('dashboard.invoices.create', compact('units'));
        }else{
            $invoices = \Excel::toCollection(new InvoicesImport, $excel->file);
            foreach($invoices->first() as $key => $invoice){
                if ($key < 1) continue;
                if(User::where('complex_id', \Auth::user()->complex_id)->where('code', $invoice[1])->count() === 0){
                    alert()->warning('عدم دسترسی');
                    $units = User::where('complex_id', \Auth::user()->complex_id)->get();
                    return view('dashboard.invoices.create', compact('units'));
                    exit;
                }
            }

            foreach($invoices->first() as $key => $invoice){
                if ($key < 1) continue;
                $inv = Invoice::create([
                    'amount' => $this->fa2en($invoice[3]),
                    'for' => $invoice[4],
                    'code' => $invoice[5],
                    'user_id' => User::where('complex_id', \Auth::user()->complex_id)->where('code',  $invoice[1])->get()->pluck('id')->first(),
                    'complex_id' => \Auth::user()->complex_id,
                    'status' => 'notPaid',
                ]);

            }

            alert()->success('صورتحساب ها باموفقیت ایجاد شدند.', 'انجام شد');
            $units = User::where('complex_id', \Auth::user()->complex_id)->get();
            return view('dashboard.invoices.create', compact('units'));


        }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        return view('dashboard.invoices.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(InvoiceUpdateRequest $request, Invoice $invoice)
    {
        $invoice->for = $request->for;
        $invoice->amount = $request->amount;
        $invoice->for = $request->for;
        $invoice->status = $request->status;
        $invoice->save();

        alert()->success('تغییر صورتحساب انجام شد.', 'انجام شد');
        return redirect()->back();
    }


    public function paid(Request $request)
    {
        $invoice = Invoice::where('id', $request->id)->where('complex_id', \Auth::user()->complex_id)->where('user_id', \Auth::user()->id)->where('status', 'paid')->first();
        if (!$invoice){
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }
        return view('dashboard.invoices.paid', compact('invoice'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
