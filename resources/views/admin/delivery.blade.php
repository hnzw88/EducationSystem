
@extends('layouts.app')

@section('title', 'トップページ')

@section('content')

<div>

  @csrf

  <h1>配信日時編集</h1>
<ul>
  @foreach($deliveryTimes as $deliveryTime)
  @if($deliveryTime->curriculums_id === $curriculum->id)
  <li>{{ date('m月d日',strtotime($deliveryTime->delivery_from))}}
      {{ date('H時i分',strtotime($deliveryTime->delivery_from))}}~
      {{ date('H時i分',strtotime($deliveryTime->delivery_to))}}
  </li>
  @endif
  @endforeach
</ul>

</div>



@endsection
