<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;

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
    
}
