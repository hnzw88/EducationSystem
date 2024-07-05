<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('articles')->insert([
            [
                'id' => '1',
                'title' => 'お知らせタイトル1',
                'posted_date' => date('Y-m-d H:i:s'),
                'article_contens' => 'お知らせ本文1 ここにお知らせ本文が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id' => '2',
                'title' => 'お知らせタイトル2',
                'posted_date' => date('Y-m-d H:i:s'),
                'article_contens' => 'お知らせ本文2 ここにお知らせ本文が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            
            [
                'id' => '3',
                'title' => 'お知らせタイトル3',
                'posted_date' => date('Y-m-d H:i:s'),
                'article_contens' => 'お知らせ本文3 ここにお知らせ本文が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id' => '4',
                'title' => 'お知らせタイトル4',
                'posted_date' => date('Y-m-d H:i:s'),
                'article_contens' => 'お知らせ本文4 ここにお知らせ本文が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'id' => '5',
                'title' => 'お知らせタイトル5',
                'posted_date' => date('Y-m-d H:i:s'),
                'article_contens' => 'お知らせ本文5 ここにお知らせ本文が入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ], 
        ]);
    }
}
