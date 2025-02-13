<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\Grade;
use App\Models\DeliveryTime;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DeliveryTimeRequest;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDeliveryEdit($curriculumId)
    {
      


         $delivery_times = DeliveryTime::where('curriculums_id',$curriculumId)->get();


         $curriculum = Curriculum::find($curriculumId);
         
         return view('delivery')->with([
            'delivery_times'=>$delivery_times,
            'curriculum'=>$curriculum
         ]);

    }

    public function store(Request $request,$curriculumId)
    {

        
// dd($request);
      
            
    
            $data = $request->input();

            // dd($data);
            
            $delivery_time = DeliveryTime::where('curriculums_id', $curriculumId)->first() ?? new DeliveryTime();

            if (!$delivery_time) {
                return redirect()->back()->with('error', '配信日時のデータが見つかりません');
            }

            // dd($delivery_times);
 // 1. 現在の配信日時レコードを削除
            DeliveryTime::where('curriculums_id', $curriculumId)->delete();

            foreach ($data as $data) {

                if ($delivery_time->id === null) {
                    continue; // IDがない場合はスキップ
                }
            
                if (!isset($data['from_date_'.$delivery_time->id]) || !isset($data['to_date_'.$delivery_time->id])) {
                    continue; // 必要なデータがない場合はスキップ
                }

                $model = new DeliveryTime();

                $start_date = $data['from_date_'.$delivery_time->id]. ' '.$data['from_time_'.$delivery_time->id];
                $end_date = $data['to_date_'.$delivery_time->id].' '.$data['to_time_'.$delivery_time->id];
                $model -> insertDate($start_date,$end_date,$curriculumId,$delivery_time);

                
                 }
        return redirect()->back()->with('success', 'レコードが追加されました');
    }




}