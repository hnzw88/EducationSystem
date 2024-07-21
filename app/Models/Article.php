<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    // 必要に応じてホワイトリストまたはブラックリストを指定します
    protected $fillable = ['title', 'posted_date', 'article_contens', 'created_at', 'updated_at'];
}
