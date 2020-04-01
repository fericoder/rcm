<?php

namespace App\Http\Controllers\Dashboard;

use App\Information;
use App\Notification;
use Illuminate\Http\Request;

class InformationController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informations = Information::where('complex_id', \Auth::user()->complex_id)->get();
        $notifications = Notification::where('complex_id', \Auth::user()->complex_id)->get();
        return view('dashboard.information', compact('informations', 'notifications'));
    }


    public function notificationStore(Request $request)
    {
        $request->validate([
            'content' => 'required|min:3|max:1000',
        ]);

        Notification::create([
            'content' => $request->content,
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
        ]);

        alert()->success('اعلان باموفقیت اضافه شد','انجام شد');
        return redirect()->back();
    }


    public function NotificationDestroy(Request $request)
    {
        if (\Gate::denies('admin')) {
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

        $notification = Notification::find($request->id);
        if ($notification->complex_id == \Auth::user()->complex_id){
            $notification->delete();
            alert()->success('اعلان با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }


    }


    public function contactStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        Information::create([
            'title' => $request->title,
            'content' => $request->content,
            'type' => 'contact',
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
        ]);

        alert()->success('اطلاعات تماس باموفقیت اضافه شد','انجام شد');
        return redirect()->back();

    }




    public function contactDestroy(Request $request)
    {
        if (\Gate::denies('admin')) {
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

        $information = Information::find($request->id);
        if ($information->complex_id == \Auth::user()->complex_id){
            $information->delete();
            alert()->success('اطلاعات تماس با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }


    }



    public function fileStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:pdf,jpg,jpeg,PNG,png,doc,docx,xslx,xls,ppt,pptx',
        ]);

        $file = $this->uploadFile($request->file('file'));

        Information::create([
            'title' => $request->title,
            'content' => $file,
            'type' => 'file',
            'user_id' => \Auth::user()->id,
            'complex_id' => \Auth::user()->complex_id,
        ]);

        alert()->success('فایل باموفقیت اضافه شد','انجام شد');
        return redirect()->back();

    }




    public function fileDestroy(Request $request)
    {
        if (\Gate::denies('admin')) {
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

        $information = Information::find($request->id);
        if ($information->complex_id == \Auth::user()->complex_id){
            $information->delete();
            alert()->success('فایل با موفقیت حذف شد', 'حذف شد');
            return redirect()->back();
        }else{
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }


    }


}
