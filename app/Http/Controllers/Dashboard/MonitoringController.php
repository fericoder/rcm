<?php

namespace App\Http\Controllers\Dashboard;

use App\Monitoring;
use App\Penalty;
use App\User;
use Illuminate\Http\Request;

class MonitoringController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $monitorings = Monitoring::where('complex_id', \Auth::user()->complex_id)->get();
        $last = Monitoring::where('complex_id', \Auth::user()->complex_id)->orderBy('id', 'desc')->first();
        $units = User::where('complex_id', \Auth::user()->complex_id)->get();
        $penalties = Penalty::where('complex_id', \Auth::user()->complex_id)->get();

        return view('dashboard.monitoring', compact('monitorings', 'last', 'units', 'penalties'));
    }

    public function store(Request $request)
    {
        $monitonig = Monitoring::create([
            'date' => $request->date,
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
            'hour_from' => $request->hour_from,
            'hour_to' => $request->hour_to,
            'camera_active_before' => $request->camera_active_before,
            'camera_active_after' => $request->camera_active_after,
            'camera_deactive_before' => $request->camera_deactive_before,
            'camera_deactive_after' => $request->camera_deactive_after,
            'camera_fault' => $request->camera_fault,
            'camera_actions' => $request->camera_actions,
            'pelak_before' => $request->pelak_before,
            'pelak_after' => $request->pelak_after,
            'pelak_actions' => $request->pelak_actions,
            'detectors_enable' => $request->detectors_enable,
            'detectors_disable' => $request->detectors_disable,
            'sound_count' => $request->sound_count,
            'detector_location' => $request->detector_location,
            'detector_cause' => $request->detector_cause,
            'detector_actions' => $request->detector_actions,
            'penalty_count' => $request->penalty_count,
        ]);

        alert()->success('گزارش با موفقیت ثبت شد', 'ثبت شد');

        return redirect()->back();

    }


}