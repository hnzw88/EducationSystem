@extends('layouts.app')

@section('title', 'トップページ')

@section('content')

<div>
 
<form action="{{ route('delivery.store', ['curriculumId' => $curriculum->id]) }}" method="POST">

  @csrf

  <h1>配信日時編集</h1>


   <li class="list-group-item">
        {{ $curriculum->title }}
   </li>





  <div>
    @foreach($delivery_times as $delivery_time)
        <div class="delivery-row">
            <input type="date" name="from_date_{{ $delivery_time->id }}" value="{{ date('Y-m-d', strtotime($delivery_time->delivery_from)) }}">
            <input type="time" name="from_time_{{ $delivery_time->id }}" value="{{ date('H:i', strtotime($delivery_time->delivery_from)) }}">
            <span>~</span>
            <input type="date" name="to_date_{{ $delivery_time->id }}" value="{{ date('Y-m-d',strtotime($delivery_time->delivery_to)) }}" >
            <input type="time" name="to_time_{{ $delivery_time->id }}" value="{{ date('H:i', strtotime($delivery_time->delivery_to)) }}">
            <button type="button" class="remove-form" id="delete-form">-</button>

        </div>
    @endforeach
  </div>
  <button type="button" class="btn btn-success" id="add-form">+</button>




<button type="submit">登録</button>

<button type="button" onclick="location.href='{{route('show.curriculum.list') }}' ">戻る</button>

</div>

</form>

@endsection

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>

  <script src="{{ asset('js/form.js') }}"></script>