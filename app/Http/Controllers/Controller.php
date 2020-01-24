<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Carbon\Carbon;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected function uploadFile($file, $watermark = true, $resize = true)
    {

        $local = array(
            '127.0.0.1',
            'localhost',
            '::1'
        );

        if(!in_array($_SERVER['REMOTE_ADDR'], $local)){
            $folder = public_path() . '_html';
        }else{
            $folder = public_path();
        }


        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;
        $filePath = "/storage/upload/{$year}/{$month}/{$day}/";
        $fileName = time() . "_" . $file->getClientOriginalName();
        $file->move($folder . $filePath, $fileName);
        $file = "$filePath" . "$fileName";
        $imageMimeTypes = ['image/jpeg', 'image/gif', 'image/png', 'image/bmp', 'image/svg+xml'];
        $contentType = mime_content_type(ltrim($file, "/"));
        if ($watermark == true && in_array($contentType, $imageMimeTypes)) {
            $this->watermark($file);
        }
        if ($resize == true && in_array($contentType, $imageMimeTypes)) {
            $sizes = ["80" => "80", "400" => "400", "250" => "250", "200" => "175", "200" => "100", "410" => "270", "120" => "50", "16" => "16", "45" => "45", "931" => "800", "930" => "390"];

            return $url['images'] = $this->resize($file, $sizes, $filePath, $fileName);
        } else {
            return $file;
        }
    }
}
