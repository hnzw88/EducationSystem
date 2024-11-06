@extends('layouts.app')

@section('title', 'トップページ')

@section('content')


<div class="container">
    <h1>授業設定</h1>
    

    <form action="{{ route('show.curriculum.create') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
                

                <div class="form-group">
                    <label for="thumbnail">サムネイル画像</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                </div>

                <select name="grade_id" id="grade">
                    <option value="">学年を選択してください</option>
                     @foreach($grades as $grade)
                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                     @endforeach
                </select>
                <!-- 上記の記述になぜなるのか要確認 -->

                <div class="form-group">
            <label for="curriculum">授業名</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="授業名" value="{{ old('title') }}">
            @if($errors->has('title'))
                <p>{{ $errors->first('title') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="price">動画URL</label>
            <input type="text" class="form-control" id="" name="video_url" placeholder="動画URL" value="{{ old('video_url') }}">
            @if($errors->has('curriculum->video_url'))
                <p>{{ $errors->first('curriculum->video_url') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="price">授業概要</label>
            <input type="text" class="form-control" id="" name="description" placeholder="授業概要" value="{{ old('description') }}">
            @if($errors->has('curriculum->video_url'))
                <p>{{ $errors->first('curriculum->video_url') }}</p>
            @endif
        </div>

        <label for="always_delivery">常時公開</label>
        <input type="checkbox" name="alway_delivery_flg" id="always_delivery" value="1">




        <button class="btn btn-lg btn-primary btn-block" type="submit">登録</button>

        

        <button type="button" onclick="location.href='{{route('show.curriculum.list') }}' ">戻る</button>

       

    </form>


</div>

@endsection