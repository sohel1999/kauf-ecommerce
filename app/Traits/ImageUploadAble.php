<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait  ImageUploadAble
{
    public function uploadOne($file)
    {

        $name = Str::random(25);

        $fileName = $name . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/sitelogo'), $fileName);
        return $fileName;
    }

    public function deleteOne($path = null, $disk = 'public')
    {
        Storage::disk($disk)->delete($path);
    }

}


