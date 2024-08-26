@extends('user.layouts.app')

@section('content')
    <a class="backtop" href="{{url('user/top')}}">{{ __('←戻る') }}</a>
    <h1>時間割</h1>
    <form action ="{{route('curriculum_scope')}}" method = "GET">
    @csrf    
        @foreach($grades as $grade)
            <button type="submit" class="grade-btn" name="grade-btn">{{$grade->name}}</button>
        @endforeach
    </form>
    @foreach($curriculum as $curriculums)
        <div>{{$curriculums->title}}</div>
        <img src ="storage/images/thumbnail/{{$curriculums->thumbnail}}" width="100" alt="サムネイル">
    @endforeach
@endsection