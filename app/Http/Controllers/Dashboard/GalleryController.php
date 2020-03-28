<?php

namespace App\Http\Controllers\Dashboard;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Gallery::where('complex_id', \Auth::user()->complex_id)->paginate(20);
        return view('dashboard.gallery.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $gallery = new Gallery;
        $gallery->category = $request->category;
        $gallery->type = $request->type;
        $gallery->file = $request->file;
        $gallery->description = $request->description;

        $galleryFile = $request->file('file');
        $galleryFileName = time() . "_" . $galleryFile->getClientOriginalName();
        $galleryFile->move('storage/Gallery', $galleryFileName);

        $galleryFileName = '/storage/Gallery/' . $galleryFileName;
        $gallery->file = $galleryFileName;

        if($galleryFile->getClientOriginalExtension() == 'jpg' OR $galleryFile->getClientOriginalExtension() == 'png' OR $galleryFile->getClientOriginalExtension() == 'jpeg' OR $galleryFile->getClientOriginalExtension() == 'JPG'){
            $type = 'Picture';
        }else{
            $type = 'Video';
        }


        $gallery->type = $type;

        $gallery->user_id = \Auth::user()->id;
        $gallery->complex_id = \Auth::user()->complex_id;
        $gallery->save();


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $photo = Gallery::where('id', (int)$request->photo)->first();
        if( !\Auth::user()->can('boardMember') AND $photo->user->id != \Auth::user()->id){
            alert()->warning('عدم دسترسی');
            return redirect()->back();
            exit;
        }else{
            $photo->delete();
            alert()->success('فایل با موفقیت حذف شد');
            return redirect()->back();
        }

    }
}
