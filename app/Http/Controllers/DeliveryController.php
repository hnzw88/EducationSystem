<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\CurriculumProgress;
use App\Models\grade;

class DeliveryController extends Controller
{
    public function showDelivery($id) {
        return view('delivery');
    }
}
