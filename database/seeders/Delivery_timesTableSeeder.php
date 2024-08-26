<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 
use App\Models\DeliveryTime;

class Delivery_timesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_times')->insert([
            [
                'id' => 1,
                'curriculims_id' => 1,
                'delivery_from' =>Carbon::create('2024,08,15,13,00'),
                'delevery_to' =>Carbon::create('2024,08,15,17,00'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        
    }
}