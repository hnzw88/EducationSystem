<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';
    protected $primaryKey = "id";
    protected $fillable=[
        'image',
        'created_at',
        'updated_at'
    ];

    public function getBannerImage()
    {
        $banners=DB::table('banners')->get();
        return $banners;
    }

    public function registerBanner($data)
    {
        DB::table('banners')->insert([
            'imege'=>$data->image,
            'created_at'=>now(),
             
        ]);
    }
    public function editBanner($repest,$banner)
    {
        $result = $banner->fill([
            'image'=>$repest->image,
            'updated_at'=>now(),
        ])->save();
        return $result;

    }
    public function deleteBanner()
    {

    }


}
