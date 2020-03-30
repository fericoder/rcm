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


    protected function uploadFile($file)
    {
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $day = Carbon::now()->day;

        $filePath = "/storage/upload/{$year}/{$month}/{$day}/";
        $fileName = time() . "_" . $file->getClientOriginalName();

        //        $file->move(public_path() . '_html' . $filePath, $fileName);
        $file->move(public_path() . $filePath, $fileName);
        $file = "$filePath" . "$fileName";

        return $file;

    }
}
