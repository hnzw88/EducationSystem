<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\grade;
use Illuminate\Support\Facades\DB;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('grades')->insert([
            [
                'id' => 1,
                'name' => '小学校１年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 2,
                'name' => '小学校２年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 3,
                'name' => '小学校３年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 4,
                'name' => '小学校４年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 5,
                'name' => '小学校５年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 6,
                'name' => '小学校６年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 7,
                'name' => '中学校１年生',
            ],
        ]);
        
        DB::table('grades')->insert([
            [
                'id' => 8,
                'name' => '中学校２年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 9,
                'name' => '中学校３年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 10,
                'name' => '高校１年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 11,
                'name' => '高校２年生',
            ],
        ]);

        DB::table('grades')->insert([
            [
                'id' => 12,
                'name' => '高校３年生',
            ],
        ]);
        
        

       

    }
}
