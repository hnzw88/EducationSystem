<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Article;

class TopController extends Controller
{
    public function showTop() {
        return view('top');
    }
}
