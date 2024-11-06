<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeliveryTime extends Model
{
    use HasFactory;

        // マスアサインメント可能なフィールドの指定
        protected $fillable = [
            'curriculum_id', 
            'delivery_from', 
            'delivery_to',
        ];
    
        // 日付型として扱うフィールドの指定（Carbonインスタンスとして自動で処理される）
        protected $dates = ['delivery_from', 'delivery_to'];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }

    public function insertDate($start_date,$end_date,$curriculumId,$delivery_time){
       

        return DB::table('delivery_times')
        ->insert([
            'id'=>$delivery_time,
            'curriculums_id'=>$curriculumId,
            'delivery_from'=>$start_date,
            'delivery_to'=>$end_date
        ]);


    }
    
}
