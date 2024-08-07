<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showBannerEdit()
    {
        $model= new Banner();
        $banners = $model->getBannerImage();
        return view('admin.banner_edit',['banners'=>$banners]);
    }

    public function delete(Request $request)
    {
        DB::beginTransaction();

        try{
            $banner = Banner::find($request->id);
            //$bannerFileName =$banner->image;
            //$deletePath = storage_path().'public/storage/images/banner'.$bannerFileName;
            //\File::delete($deletePath);
            //dd($bannerFileName);
            $banner->delete();
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            return back();
        }
        return redirect(url('/admin/banner_edit'));
    }

    public function create(BannerRequest $request)
    {
        //dd($request);
        $bannerFiles=$request->file('image');
        
        foreach($bannerFiles as $bannerFile){
            $fileName = $bannerFile->getClientOriginalName();
            $bannerFile->storeAs('public/images/banner', $fileName);
        
            DB::beginTransaction();

            try{
                $model = new Banner();
                $request->image = 'storage/images/banner/'.$fileName;
                $model->registerBanner($request);
                
                DB::commit();
            }catch(\Exception $e){
                DB::rollback();
                return back();
            }
        }
        return redirect(route('admin.show.banner.edit'));
    }
    
}
