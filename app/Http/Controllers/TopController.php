<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function showTop(){
        return view('/user/top');
    }
}
