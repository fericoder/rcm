<?php

namespace App\Http\Controllers\Dashboard;

use App\Equipment;
use App\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends \App\Http\Controllers\Controller
{
    public function facilityIndex()
    {
        $equipments = Equipment::where('complex_id', \Auth::user()->complex_id)->get();
        $maintnances = Maintenance::where('complex_id', \Auth::user()->complex_id)->where('type', 'fality')->get();
        return view('dashboard.maintenance.facility.index', compact('equipments', 'maintnances'));
    }

    public function facilityStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:equipment',
            'location' => 'required',
        ]);
        Equipment::create([
            'name' => $request->name,
            'location' => $request->location,
            'complex_id' => \Auth::user()->complex_id,
            'user_id' => \Auth::user()->id,
        ]);

        alert()->success('تجهیز باموفقیت اضافه شد', 'اضافه شد');
        return redirect()->back();
    }
}
