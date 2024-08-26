<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function showTop()
    {
        return view('user.top');
    }
    
}
