<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curricullum;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 

class CurriculumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curriculums')->insert([
            [
                'id' => 1,
                'title'=>'小１国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('curriculums')->insert([
            [
                'id' => 2,
                'title'=>'小１算数',
                'thumbnail'=>'算数.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('curriculums')->insert([
            [
                'id' => 3,
                'title'=>'小１理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('curriculums')->insert([
            [
                'id' => 4,
                'title'=>'小１社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('curriculums')->insert([
            [
                'id' => 5,
                'title'=>'小１テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 6,
                'title'=>'小２国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 7,
                'title'=>'小２算数',
                'thumbnail'=>'算数.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 8,
                'title'=>'小２理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('curriculums')->insert([
            [
                'id' => 9,
                'title'=>'小２社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 10,
                'title'=>'小２テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 11,
                'title'=>'小３国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 12,
                'title'=>'小３算数',
                'thumbnail'=>'算数.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 13,
                'title'=>'小３理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 14,
                'title'=>'小３社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 15,
                'title'=>'小３テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 16,
                'title'=>'小４国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 17,
                'title'=>'小４算数',
                'thumbnail'=>'算数.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 18,
                'title'=>'小４理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('curriculums')->insert([
            [
                'id' => 19,
                'title'=>'小４社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 20,
                'title'=>'小４テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 21,
                'title'=>'小５国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>5,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 22,
                'title'=>'小５算数',
                'thumbnail'=>'算数.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>5,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 23,
                'title'=>'小５理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>5,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 24,
                'title'=>'小５社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>5,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 25,
                'title'=>'小５テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>5,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 26,
                'title'=>'小６国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 27,
                'title'=>'小６算数',
                'thumbnail'=>'算数.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 28,
                'title'=>'小６理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 29,
                'title'=>'小６社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 30,
                'title'=>'小６テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 31,
                'title'=>'中１国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>7,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 32,
                'title'=>'中１数学',
                'thumbnail'=>'数学.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>7,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 33,
                'title'=>'中１理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>7,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 34,
                'title'=>'中１社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>7,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 35,
                'title'=>'中１英語',
                'thumbnail'=>'英語.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>7,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 36,
                'title'=>'中１テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>7,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 37,
                'title'=>'中２国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 38,
                'title'=>'中２数学',
                'thumbnail'=>'数学.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 39,
                'title'=>'中２理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 40,
                'title'=>'中２社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 41,
                'title'=>'中２英語',
                'thumbnail'=>'英語.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 42,
                'title'=>'中２テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 43,
                'title'=>'中３国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>9,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 44,
                'title'=>'中３数学',
                'thumbnail'=>'数学.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>9,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 45,
                'title'=>'中３理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>9,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 46,
                'title'=>'中３社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>9,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 47,
                'title'=>'中３英語',
                'thumbnail'=>'英語.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>9,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 48,
                'title'=>'中３テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>9,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 49,
                'title'=>'高１国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 50,
                'title'=>'高１数学',
                'thumbnail'=>'数学.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 51,
                'title'=>'高１理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 52,
                'title'=>'高１社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 53,
                'title'=>'高１英語',
                'thumbnail'=>'英語.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 54,
                'title'=>'高１テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 55,
                'title'=>'高２国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>11,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 56,
                'title'=>'高２数学',
                'thumbnail'=>'数学.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>11,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 57,
                'title'=>'高２理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>11,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 58,
                'title'=>'高２社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>11,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 59,
                'title'=>'高２英語',
                'thumbnail'=>'英語.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>11,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 60,
                'title'=>'高２テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>11,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 61,
                'title'=>'高３国語',
                'thumbnail'=>'国語.png',
                'alway_delivery_flg'=>0,
                'grade_id'=>12,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 62,
                'title'=>'高３数学',
                'thumbnail'=>'数学.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>12,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 63,
                'title'=>'高３理科',
                'thumbnail'=>'理科.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>12,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 64,
                'title'=>'高３社会',
                'thumbnail'=>'社会.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>12,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 65,
                'title'=>'高３英語',
                'thumbnail'=>'英語.jpeg',
                'alway_delivery_flg'=>0,
                'grade_id'=>12,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        DB::table('curriculums')->insert([
            [
                'id' => 66,
                'title'=>'高３テスト',
                'thumbnail'=>'テスト.jpeg',
                'alway_delivery_flg'=>1,
                'grade_id'=>12,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
    }
}
