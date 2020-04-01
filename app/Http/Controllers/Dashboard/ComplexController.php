<?php

namespace App\Http\Controllers\Dashboard;

use App\Complex;
use App\Http\Requests\ComplexRequest;
use App\Personnel;
use App\Website;
use Illuminate\Http\Request;

class ComplexController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complex = \Auth::user()->complex;
        return view('dashboard.configuration.configuration', compact('complex'));
    }




    public function personnel(Request $request)
    {

        $picture = $this->uploadFile($request->file('picture'));

        Personnel::create([
            'complex_id' => \Auth::user()->complex_id,
            'user_id' => \Auth::user()->id,
            'fullName' => $request->fullName,
            'position' => $request->position,
            'order' => $request->order,
            'picture' => $picture,
        ]);

        alert()->success('پرسنل اضافه شد', 'اضافه شد');
        return redirect()->back();

    }



    public function update(ComplexRequest $request, Complex $complex)
    {
        $complex = Complex::find($request->id);
        $complex->units = $request->units;
        $complex->address = $request->address;
        $complex->type = $request->type;
        $complex->save();

        alert()->success('اطلاعات مجتمع ثبت شد.', 'ثبت شد');
        return redirect()->route('units.index');

    }



    public function WebsiteForm()
    {
        $complex = \Auth::user()->complex;
        $website = Website::where('complex_id', \Auth::user()->complex_id)->first();
        $personnels = Personnel::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.configuration.website', compact('complex', 'personnels', 'website'));

    }


    public function WebsiteFormStore(Request $request)
    {
        $website = Website::where('complex_id', \Auth::user()->complex_id)->first();

        $website->update([
            'slogan' => $request->slogan,
            'description' => $request->description,
            'hypermarket' => $request->hypermarket,
            'cinema' => $request->cinema,
            'salonbadansazi' => $request->salonbadansazi,
            'mahdekoodak' => $request->mahdekoodak,
            'barghezterari' => $request->barghezterari,
            'coffeshop' => $request->coffeshop,
            'labi' => $request->labi,
            'arayeshgahzanane' => $request->arayeshgahzanane,
            'arayeshgahmardane' => $request->arayeshgahmardane,
            'masaj' => $request->masaj,
            'pent' => $request->pent,
            'salontadris' => $request->salontadris,
            'charge' => $request->charge,
            'amfi' => $request->amfi,
            'ketabkhune' => $request->ketabkhune,
            'asansor' => $request->asansor,
            'bms' => $request->bms,
            'harigh' => $request->harigh,
        ]);

        alert()->success('اطلاعات مجتمع بروز شد.', 'بروز شد');
        return redirect()->back();
    }



}
