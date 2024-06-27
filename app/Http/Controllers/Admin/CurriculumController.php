<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CurriculumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function showCurriculumList()
    {
        return view('admin.curriculum_list');
    }
}
