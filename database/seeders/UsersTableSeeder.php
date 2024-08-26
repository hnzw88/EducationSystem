<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '山崎美樹',
                'name_kana' => 'ヤマザキミキ',
                'email' => 'test@gmail.com',
                'password' => Hash::make('password'),
                'grade_id' => 1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => '中山美樹',
                'name_kana' => 'ナカヤマミキ',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('0404miki'),
                'grade_id' => 1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
        ]);
        
    }
}
