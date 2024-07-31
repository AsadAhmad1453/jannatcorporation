<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;



class SettingController extends Controller
{

    public function headerSetting()
	{
		$headerContent = Setting::pluck('value','key')->all();
		return view('admin.setting.header-setting',compact('headerContent'));
	}
	public function homepageSetting()
	{
		$homepageContent = Setting::pluck('value','key')->all();
		return view('admin.setting.homepage-setting',compact('homepageContent'));
	}

	public function footerSetting()
	{
		$footerContent = Setting::pluck('value','key')->all();
		return view('admin.setting.footer-setting',compact('footerContent'));
	}
	public function contactusSetting()
	{
		$content = Setting::pluck('value','key')->all();
		return view('admin.setting.contactuspage-setting',compact('content'));
	}
	public function aboutusSetting()
	{
		$content = Setting::pluck('value','key')->all();
		return view('admin.setting.aboutuspage-setting',compact('content'));
	}
    public function storeSetting(Request $request)
    {	
		try{
			foreach($request->all() as $key =>$value){
				if($request->hasFile($key)){
					$image = Setting::where('key',$key)->select('value')->first();
					if($image){
						$urlParts = parse_url($image->value);
						$localPath = trim($urlParts['path'], '/');
						if (File::exists(public_path($localPath))) {
							File::delete(public_path($localPath));
						} 
					}
					$value = storeImage($request->file($key), public_path('app-assets/website-images'));
				}
				Setting::updateOrCreate(
					['key' => $key],
					['value' => $value]
				);
			}
			return back()->with('success','Settings updated successfully');
		}catch(\Exception $e){
			return back()->with('error',$e->getMessage());
		}
    }
}
