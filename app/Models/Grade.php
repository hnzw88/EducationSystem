<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Grade extends Model
{
  use HasFactory;

  public function getList(){

    $grades = DB::table('grades')->get();

    return $grades;
  }

  // public function getList(){
  //   $grades = DB::table('grades')
  //   ->join('grades', 'curriculums.grade_id', '=', 'grades.name')
  //   ->select('grades.*','curriculums.*','grades.name')
  //   ->get();
  //
  //
  //   return $grades;
  //
  // }

    public function curriculums()
{
    return $this->hasMany(Curriculum::class);
}
}
