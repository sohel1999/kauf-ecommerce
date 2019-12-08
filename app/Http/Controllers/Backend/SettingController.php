<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BaseController;
use App\Models\Setting;
use App\Traits\ImageUploadAble;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;

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


        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            $validator = Validator::make($data, [
                "{$key}" => 'required'
            ]);

        }
        if ($validator->fails()) {

            Toastr::success("Settings cant't be empty!", 'Setting', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }


        if ($request->has('site_logo')) {

            if (config('settings.site_logo') != null) {
                $this->deleteOne(config('settings.site_logo'));
            }
            $logo = $this->uploadOne($request->file('site_logo'), 'uploads/sitelogo');
            Setting::set('site_logo', $logo);
        } elseif ($request->has('site_favicon')) {
            if (config('settings.site_favicon') != null) {
                $this->deleteOne(config('settings.site_favicon'));
            }
            $favicon = $this->uploadOne($request->file('site_favicon'), 'uploads/sitelogo');
            Setting::set('site_favicon', $favicon);
        } elseif ($request->has('tax')) {
            $tax = (int)$request->get('tax');
            $tax = ($tax / 100);
            Setting::set('tax', $tax);
        } else {
            $keys = $request->except('_token');
            foreach ($keys as $key => $value) {
                Setting::set($key, $value);
            }
        }
        Toastr::success('Successfully setting update', 'Setting', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
