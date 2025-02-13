<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\Grade;
use App\Models\DeliveryTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CurriculumRequest;


class CurriculumController extends Controller
{

    public function showCurriculumList($id=1)
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


    public function showCurriculumEdit($id)
    {


        $grades = Grade::all();
        $curriculum = Curriculum::find($id);
        return view('curriculum_edit')->with([
          'grades'=>$grades,
          'curriculum'=>$curriculum
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




public function showCurriculumCreate(Request $request)
{
 
  $grades = Grade::select('id', 'name')->get();

  return view('curriculum_create')->with([
    'grades'=>$grades
  ]);

}



//新規登録
public function storeCurriculumCreate(Request $request)
{
//dd($request);

DB::beginTransaction();


try {
  
  $test_image = $request->file('thumbnail');
  
  if($test_image){
    //dd($test_image);

    // sampleディレクトリに画像を保存publicサンプル中に
    $file_name = $request->file('thumbnail')->getClientOriginalName();
    //dd($file_name);
    $request->file('thumbnail')->storeAs('public', $file_name);
    // $alwaysDeliveryFlag = $request->has('alway_delivery_flg') ? 1 : 0;
    $path = 'storage/'.$file_name;
  }else{
    $file_name = null;
    //dd($file_name);
  }

    // // 登録処理呼び出し
    // $model = new Curriculum();
    // $model->createCurriculum($request, $file_name);
    // $model->alway_delivery_flg = $alwaysDeliveryFlag;

    // $model->save();



    Curriculum::create([
      'title' => $request->title,
      'thumbnail' => $path,
      'description' => $request->description,
      'video_url' => $request->video_url,
      'alway_delivery_flg' => $request->alway_delivery_flg,
      // 'alway_delivery_flg' => $alwaysDeliveryFlag,
      'grade_id' => $request->grade_id
  ]);




    DB::commit();
} catch (\Exception $e) {
    DB::rollback();
    return back();
}


// 処理が完了したらshow.curriculum.listにリダイレクト
return redirect(route('show.curriculum.list'));

}


    public function update(CurriculumRequest $request, $id)
    {
      
      //dd($request);
      $curriculum = Curriculum::find($id);
      

      // dd($request->curriculum_id);

      DB::beginTransaction();
      try{

        $image = $request->file('thumbnail');

        if($image === null){
          $file_name = $curriculum->thumbnail;

          //dd($file_name);
        }else{

          \Illuminate\Support\Facades\File::delete($curriculum->thumbnail);
          $img_name = $image->getClientOriginalName();

          $file_name = 'public/' . $img_name;
          $image->storeAs('public/', $img_name);

          //dd($img_name);

          
        }

        if($request->tags === null){
          $request->tags = 0;
        }
        // dd($request->tags);
        $curriculum->updateCurriculum($request, $curriculum,$file_name);
        
       // dd($request);
        DB::commit();
      }catch (\Exception $e) {
          DB::rollback();
          return back();
      }

        return redirect(route('show.curriculum.list'));
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


    public function store(Request $request)
{
    $schedules = $request->input('schedule');
    
    foreach ($schedules as $schedule) {
        // 各配送スケジュールを保存
        // Schedule::create($schedule);
    }

    return redirect()->back()->with('delivery', 'データが保存されました');
}
}
