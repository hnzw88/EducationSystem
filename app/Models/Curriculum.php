<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
