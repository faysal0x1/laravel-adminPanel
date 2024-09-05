<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SiteSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::first();
        return view('admin.site-settings', compact('settings'));
    }

    public function update(Request $request)
    {

        try {

            $request->validate(
                [
                    'site_title' => 'required',
                    'site_phone' => 'required',
                    'site_hotline' => 'required',
                    'site_email' => 'required',
                    'site_address' => 'required',
                    'logo' => 'mimes:jpg,jpeg,png',
                    'favicon' => 'mimes:jpg,jpeg,png',
                ],
                [
                    'site_title.required' => 'Please Enter Site Title',
                    'site_phone.required' => 'Please Enter Site Phone Number',
                    'site_hotline.required' => 'Please Enter Site Hotline Number',
                    'site_email.required' => 'Please Enter Site Email',
                    'site_address.required' => 'Please Enter Site Address',
                    'logo.mimes' => 'Please Upload .jpg, .jpeg, .png Image',
                    'favicon.mimes' => 'Please Upload .jpg, .jpeg, .png Image',
                ]
            );
            $id = 1;
            $data = SiteSetting::find($id);
            $logo_url = $data->logo ?? '';
            $favicon_url = $data->favicon ?? '';
            if ($request->file('logo')) {
                $img = $request->file('logo');
                $name_gen = 'logo' . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(70, 70)->save('upload/site_settings/' . $name_gen);
                $logo_url = 'upload/site_settings/' . $name_gen;
                if ($data) {
                    $oldImage = $data->logo;
                    if ($oldImage && file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
            }
            if ($request->file('favicon')) {
                $img = $request->file('favicon');

                $name_gen = 'favicon' . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(32, 32)->save('upload/site_settings/' . $name_gen);
                $favicon_url = 'upload/site_settings/' . $name_gen;
                if ($data) {
                    $oldImage = $data->favicon;
                    if ($oldImage && file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
            }

            SiteSetting::updateOrCreate(
                ['id' => $id],
                [
                    'logo' => $logo_url,
                    'favicon' => $favicon_url,
                    'site_name' => $request->site_name,
                    'site_title' => $request->site_title,
                    'site_description' => $request->site_description,
                    'site_phone' => $request->site_phone,
                    'site_hotline' => $request->site_hotline,
                    'site_email' => $request->site_email,
                    'site_address' => $request->site_address,
                    'site_map' => $request->site_map,
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                ]
            );

            $notification = [
                'message' => 'Site Setting updated Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->back()->with($notification);
        } catch (\Throwable $th) {

            $notification = [
                'message' => $th->getMessage(),
                'alert-type' => 'success',
            ];

            return redirect()->back()->with($notification);
        }
    }
}
