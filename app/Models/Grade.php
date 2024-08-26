<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Curriculum;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';
    protected $primaryKey = "id";
    protected $fillable=[
        'name',
        'created_at',
        'updated_at'
    ];

    public function Curriculums()
    {
        return $this->hasMany(Curriculum::class);
    }

    public function getGradeList()
    {
        $grades = DB::table('grades')->get();
        return $grades;
    }
}
