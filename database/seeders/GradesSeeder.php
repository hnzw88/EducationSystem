<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
          'name'=>'小学校1年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'小学校2年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'小学校3年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'小学校4年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'小学校5年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'小学校6年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'中学校1年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'中学校2年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'中学校3年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'高校1年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'高校2年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

        Grade::create([
          'name'=>'高校3年生',
          'created_at' => '2024-07-01',
          'updated_at' => '2024-07-02',
        ]);

    }
}
