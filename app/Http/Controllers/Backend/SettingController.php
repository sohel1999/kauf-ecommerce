<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BaseController;
use App\Models\Setting;
use App\Traits\ImageUploadAble;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SettingController extends BaseController
{

    use ImageUploadAble;

    public function index()
    {

        $this->setPageTitle('Settings', 'Manage Settings');
        return view('backend.settings.setting');
    }

    public function update(Request $request)
    {
        $keys = $request->except('_token');

        foreach ($keys as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            $setting->update([$key => $value]);
        }
        Toastr::success('Successfully setting update', 'Setting', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
