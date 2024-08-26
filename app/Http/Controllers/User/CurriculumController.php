<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Grade;
use Illuminate\Support\Facades\DB;

class CurriculumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function showCurriculumList()
    {
        $model = new Grade();
        $grades = $model->getGradeList();
        return view('user.curriculum_list',['grades'=>$grades]);
    }
    public function curriculum_scope(Request $reqest)
    {
        $models = new Curriculum();
        $curriculums = $models->getCurriculumList();

        $curriculum = Curriculum::sortable()
            ->scopeGradeIdFilter($reqest->gradeId)
            ->appends($reqest->all());
        return view('user.curriculum_list',['grades'=>$grades,'curriculum'=>$curriculum]);    
    }
}
