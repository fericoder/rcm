<?php

namespace App\Http\Controllers\Dashboard;

use App\Parking;
use App\PermissionRequest;
use App\ResidenceMember;
use Illuminate\Http\Request;

class IndexController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $parkings = Parking::where('complex_id', \Auth::user()->complex_id)->where('user_id', \Auth::user()->id )->get();
        $residences = ResidenceMember::where('complex_id', \Auth::user()->complex_id)->where('user_id', \Auth::user()->id )->get();
        $permissions = PermissionRequest::where('complex_id', \Auth::user()->complex_id)->where('user_id', \Auth::user()->id )->get();
        return view('dashboard.index', compact('parkings', 'residences', 'permissions'));
    }

    public function parking(Request $request)
    {
        $validatedData = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'irDigit' => 'required',
            'threeDigit' => 'required',
            'letter' => 'required',
            'twoDigit' => 'required',
        ]);

        switch ($request->letter) {
            case 'الف':
                $plateLetNum = '01';
                break;
            case 'ب':
                $plateLetNum = '02';
                break;
            case 'پ':
                $plateLetNum = '03';
                break;
            case 'ت':
                $plateLetNum = '04';
                break;
            case 'ث':
                $plateLetNum = '05';
                break;
            case 'ج':
                $plateLetNum = '06';
                break;
            case 'چ':
                $plateLetNum = '07';
                break;
            case 'ح':
                $plateLetNum = '08';
                break;
            case 'خ':
                $plateLetNum = '09';
                break;
            case 'د':
                $plateLetNum = '10';
                break;
            case 'ذ':
                $plateLetNum = '11';
                break;
            case 'ر':
                $plateLetNum = '12';
                break;
            case 'ز':
                $plateLetNum = '13';
                break;
            case 'ژ':
                $plateLetNum = '14';
                break;
            case 'س':
                $plateLetNum = '15';
                break;
            case 'ش':
                $plateLetNum = '16';
                break;
            case 'ص':
                $plateLetNum = '17';
                break;
            case 'ض':
                $plateLetNum = '18';
                break;
            case 'ط':
                $plateLetNum = '19';
                break;
            case 'ظ':
                $plateLetNum = '20';
                break;
            case 'ع':
                $plateLetNum = '21';
                break;
            case 'غ':
                $plateLetNum = '22';
                break;
            case 'ف':
                $plateLetNum = '23';
                break;
            case 'ق':
                $plateLetNum = '24';
                break;
            case 'ک':
                $plateLetNum = '25';
                break;
            case 'گ':
                $plateLetNum = '26';
                break;
            case 'ل':
                $plateLetNum = '27';
                break;
            case 'م':
                $plateLetNum = '28';
                break;
            case 'ن':
                $plateLetNum = '29';
                break;
            case 'و':
                $plateLetNum = '30';
                break;
            case 'ه':
                $plateLetNum = '31';
                break;
            case 'ی':
                $plateLetNum = '32';
                break;
        }

        $plateLetNum2 = $request->twoDigit . $plateLetNum . $request->threeDigit . $request->irDigit;

        Parking::create([
            'code' => \Auth::user()->parking_code,
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'irDigit' => $request->irDigit,
            'threeDigit' => $request->threeDigit,
            'letter' => $request->letter,
            'twoDigit' => $request->twoDigit,
            'numberPlate' => $plateLetNum2,
        ]);

        alert()->success('خودرو با موفقیت ثبت شد', 'ثبت شد');
        return redirect()->back();

    }

    public function parkingDestroy(Request $request)
    {
        $parking = Parking::find($request->id);
        if ($parking->complex_id == \Auth::user()->complex_id AND $parking->user_id == \Auth::user()->id){
            $parking->delete();
            alert()->success('پارکینگ با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

    }

    public function residenceMembers(Request $request)
    {
        $validatedData = $request->validate([
            'fullName' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'phoneNumber' => 'required',
        ]);

        ResidenceMember::create([
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'fullName' => $request->fullName,
            'gender' => $request->gender,
            'age' => $request->age,
            'phoneNumber' => $request->phoneNumber,
        ]);

        alert()->success('ساکن با موفقیت افزوده شد','انجام شد');
        return redirect()->back();

    }


    public function residenceDestroy(Request $request)
    {
        $residence = ResidenceMember::find($request->id);
        if ($residence->complex_id == \Auth::user()->complex_id AND $residence->user_id == \Auth::user()->id){
            $residence->delete();
            alert()->success('ساکن با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

    }

    public function permissionRequest(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'date' => 'required',
        ]);

        PermissionRequest::create([
            'subject' => $request->subject,
            'complex_id' => \Auth::user()->complex_id,
            'user_id' => \Auth::user()->id,
            'date' => $request->date,
            'status' => 'بررسی نشده',
        ]);

        alert()->success('درخواست با موفقیت افزوده شد','انجام شد');
        return redirect()->back();

    }


}
