<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function showTop(){
        // 必要に応じてデータベースからデータを取得
        $user = Auth::user(); // ログインユーザー情報を取得

        // 必要なデータをビューに渡す
        return view('/top', compact('user'));
    }
}
