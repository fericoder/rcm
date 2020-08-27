<?php

namespace App\Http\Controllers\Dashboard;

use App\Charge;
use App\Complex;
use App\User;
use Illuminate\Http\Request;

class ChargeManagementController extends \App\Http\Controllers\Controller
{

    public function index()
    {
        $complex = \Auth::user()->complex;
        $charge = $complex->charge;
        return view('dashboard.configuration.charge', compact('complex', 'charge'));

    }


    public function update(Request $request)
    {
        if (Complex::where('id', \Auth::user()->complex_id)->first()->charge){
            $charge = Complex::where('id', \Auth::user()->complex_id)->first()->charge;
            $charge->update([
                'unit' => $request->unit,
                'static' => $request->static,
                'staticAmount' => $request->staticAmount,
                'meter' => $request->meter,
                'meterAmount' => $request->meterAmount,
                'floor' => $request->floor,
                'floorAmount' => $request->floorAmount,
                'person' => $request->person,
                'personAmount' => $request->personAmount,
                'vacant' => $request->vacant,
                'vacantAmount' => $request->vacantAmount,
                'automaticGenerate' => $request->automaticGenerate,
                'automaticGenerateDay' => $request->automaticGenerateDay,
                'rounding' => $request->rounding,
                'roundingAmount' => $request->roundingAmount,
                'partialPayment' => $request->partialPayment,
                'partialPaymentPercent' => $request->partialPaymentPercent,
            ]);
        }else{
            Charge::create([
               'complex_id' => \Auth::user()->complex_id,
                'unit' => $request->unit,
                'static' => $request->static,
                'staticAmount' => $request->staticAmount,
                'meter' => $request->meter,
                'meterAmount' => $request->meterAmount,
                'floor' => $request->floor,
                'floorAmount' => $request->floorAmount,
                'person' => $request->person,
                'personAmount' => $request->personAmount,
                'vacant' => $request->vacant,
                'vacantAmount' => $request->vacantAmount,
                'automaticGenerate' => $request->automaticGenerate,
                'automaticGenerateDay' => $request->automaticGenerateDay,
                'rounding' => $request->rounding,
                'roundingAmount' => $request->roundingAmount,
                'partialPayment' => $request->partialPayment,
                'partialPaymentPercent' => $request->partialPaymentPercent,
            ]);
        }

        alert()->success('تنظیمات شارژ باموفقیت ثبت شد','ثبت شد');
        return redirect()->back();
    }


}
