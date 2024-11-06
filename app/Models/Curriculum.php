<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Curriculum extends Model
{
    use HasFactory;

    public static function getList()
{
    return self::all();
}

    protected $table = 'curriculums';

   // ホワイトリスト方式で保存可能なカラムを指定
   protected $fillable = [
       'title',
       'thumbnail',
       'description',
       'video_url',
       'alway_delivery_flg',
       'grade_id',
   ];


   public function grade()
   {
        return $this->belongsTo(Grade::class);
   }

   public function DeliveryTime()
   {   
        return $this->hasMany(DeliveryTime::class);
   }

   public function createCurriculum($request, $file_name)
   {
    DB::table('curriculum')->insert([
        'id'=>$request->input('id'),
        'title'=>$request->input('title'),
        'thumbnail'=>$file_name,
        'description'=>$request->input('description'),
        'alway_delivery_flg'=>$request->input('alway_delivery_flg'),
        'grade_id' => $request->input('grade_id'),
        'created_at'=> now(),
        'updated_at'=> now(),
    ]);

   }


  public function updateCurriculum($request, $curriculum,$file_name)
  {
    //dd($request);
        $curriculum->thumbnail = $file_name;
        $curriculum->title = $request->title;
        $curriculum->video_url = $request->video_url;
        //phpadmin カラム　　　input　内のname属性のデータ
        $curriculum->description = $request->description;
        $curriculum->alway_delivery_flg = $request->tags;
        $curriculum->save();
        //dd($curriculum);
        
  }


}
