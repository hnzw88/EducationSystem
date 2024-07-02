<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagePaths = [
            'storage/images/banner/haru.jfif',
            'storage/images/banner/natu.jpeg',
            'storage/images/banner/aki.jfif',
            'storage/images/banner/fuyu.jpg',
            
        ];
        foreach ($imagePaths as $imagePath) {
            $banner = new Banner;
            $banner->image = $imagePath;
            $banner->save();
        };    
    }
}
