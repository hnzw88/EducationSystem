<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $primaryKey = "id";
    protected $fillable=[
        'title',
        'posted_date',
        'article_contents',
        'created_at',
        'updated_at'
    ];
}
