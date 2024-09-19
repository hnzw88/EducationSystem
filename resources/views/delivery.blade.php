  @extends('layouts.app')

@section('title', 'トップページ')

@section('content')

<div>

  @csrf

  <h1>配信日時編集</h1>

   <li class="list-group-item">
        {{ $curriculum->title }}
   </li>





  <div>
    @foreach($delivery_times as $delivery_time)
        <div class="delivery-row">
            <input type="date" name="text_1[]" value="{{ date('Y-m-d', strtotime($delivery_time->delivery_from)) }}" >
            <input type="time" name="text_2[]" value="{{ date('H:i', strtotime($delivery_time->delivery_from)) }}">
            <span>~</span>
            <input type="date" name="text_1[]" value="{{ date('Y-m-d',strtotime($delivery_time->delivery_to)) }}" >
            <input type="time" name="text_2[]" value="{{ date('H:i', strtotime($delivery_time->delivery_to)) }}">
            <button type="button" class="btn btn-danger removeRow">-</button>

        </div>
    @endforeach
  </div>
  <button type="button" class="btn btn-success" id="addRow">+</button>

  <script src="{{ asset('js/form.js') }}"></script>


<button type="submit">登録</button>

</div>






@endsection