<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="{{ asset('css/curriclum_list.css') }}">


  </head>
  <body>

  </body>
</html>

@extends('layouts.app')

@section('title', 'トップページ')

@section('content')
    <div>

      @csrf

      <h1>授業一覧</h1>

      <div class="top">
　　　　　　　<button type="button" class="btn-success" onclick="location.href='curriculum_create'">
               新規登録
             </button>

　　　　　　     <div class='main'>

  　　　　　　      <h2>{{$gradeName}}</h2>

                </div>
      </div>

      <div class='sub'>
        <ul>
          @foreach ($grades as $grade)
          <li>
           <a class="grade_name" href="{{ route( 'show.curriculum.list', $grade->id ) }}">{{ $grade->name }}</a>
          </li>
          @endforeach

        </ul>

          <div class="subject">

          @foreach ($curriculums as $curriculum)

        　　<div class='subbox'>
              <img src="{{ asset('storage/sample.jpg') }}" />

              <li class="list-group-item">
               {{ $curriculum->title }}
            　</li>

              <ul>
                @foreach($delivery_times as $delivery_time)
                @if($delivery_time->curriculums_id === $curriculum->id)
                <li>{{ date('m月d日', strtotime($delivery_time->delivery_from)) }}</li>
                <li>{{ date('H時i分',strtotime($delivery_time->delivery_from)) }}～{{ date('H時i分',strtotime($delivery_time->delivery_to)) }}</li>

                @endif
                @endforeach
              </ul>

              <a class="btn btn-primary" href="{{ route('show.curriculum.edit', $curriculum->id) }}" >授業内容編集</a>

              <a class="btn btn-primary" href="{{ route('show.delivery.edit',$curriculum->id) }}" > 配信日時編集</a>

            
            </div>

             @endforeach

           </div>
      </div>



                </div>




   @endsection
