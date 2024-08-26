<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CurriculumClearCheck extends Model
{
    use HasFactory;

    protected $table = 'curriculim_clear_checks';
    protected $primaryKey = "id";
    protected $fillable=[
        'users_id',
        'grade_id',
        'clear_flg',
        'created_at',
        'updated_at'
    ];
}
