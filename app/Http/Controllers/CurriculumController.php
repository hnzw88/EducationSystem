<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\Grade;
use App\Models\DeliveryTime;
use Illuminate\Support\Facades\DB;


class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCurriculumList($id)
    {

      $grades = Grade::all();
      $gradeName = Grade::find($id)->name;

      $curriculums = Curriculum::where('grade_id', $id)->get();
//カリキュラムテーブルから（grade_idを参照し、＄idを含む授業を持ってくる。）

      $curriculumId= $curriculums->pluck('id');

      

      $delivery_times = DeliveryTime::whereIn('curriculums_id',$curriculumId)->get();

      


      return view('curriculum_list')->with([
        'grades'=>$grades,
        'curriculums'=>$curriculums,
        'delivery_times'=>$delivery_times,
        'gradeName'=>$gradeName
       ]);
    }

    public function create()
    {
        //
    }

    public function showCurriculumEdit($id)
    {


        $grades = Grade::all();
        $curriculums = Curriculum::find($id);

        return view('curriculum_edit')->with([
          'grades'=>$grades,
          'curriculums'=>$curriculums
        ]);
    }

    public function showDeliveryEdit($curriculumId)
    {
      


         $delivery_times = DeliveryTime::where('curriculums_id',$curriculumId)->get();


         $curriculum = Curriculum::find($curriculumId);
         
         return view('delivery')->with([
            'delivery_times'=>$delivery_times,
            'curriculum'=>$curriculum
         ]);

    }

    public function update(Request $request, $id)
    {
      $model = new Curriculum();

      $dir = 'sample';

      $test_image = $request->file('img_path');

      DB::beginTransaction();
      try{
          if($test_image){

           // アップロードされたファイル名を取得
          $file_name = $request->file('img_path')->getClientOriginalName();
          $model->registupdate($request, $file_name, $id);
          $request->file('img_path')->storeAs('public/' . $dir, $file_name);

        }else{
          $model->imgupdate($request, $id);

        }

        DB::commit();
      }catch (\Exception $e) {
          DB::rollback();
          return back();
      }

        return redirect(route('curriculum_edit',['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($destoryId)
    {
      // $delivery_times = DeliveryTime::where('curriculums_id',$curriculumId)->get();


      // $curriculum = Curriculum::find($curriculumId);
      
      // return view('delivery')->with([
      //    'delivery_times'=>$delivery_times,
      //    'curriculum'=>$curriculum
      // ]);

    }
}
