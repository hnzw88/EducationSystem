<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Grade;
use App\Models\DeliveryTime;
use Illuminate\Http\Request;

class Curriculum extends Model
{
    use HasFactory;

    protected $table = 'curriculums';
    protected $primaryKey = "id";
    protected $fillable=[
        'title',
        'thumbnail',
        'description',
        'video_url',
        'alway_delivery_flg',
        'grade_id',
        'created_at',
        'updated_at'
    ];

    public function Grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function DeliveryTimes()
    {
        return $this->hasMany(DeliveryTime::class);
    }
    public function getCurriculumList()
    {
        $curriculums = DB::table('curriculums')->get();
        return $curriculums;
    }

    public function scopeGradeIdFilter($query,string $gradeId=null)
    {
        if(!$gradeId){
            return $query;
        }
        return $query->join('grades','curriculims.grade_id','=','grades.id')
                     ->select('curriculums.title,thumbnail')
                     ->where('grade_id',$gradeId);
    }



    
}
