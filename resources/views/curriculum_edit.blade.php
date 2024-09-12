@extends('layouts.app')

@section('title', 'トップページ')

@section('content')


<div class="container">
    <h1>授業設定</h1>

    <form action="{{ route('show.curriculum.edit',$curriculums->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          @method('PUT') <!-- PUTメソッドを使用する場合 -->

                <!-- 既存のサムネイルを表示 -->
                @if ($curriculums->thumbnail)
                    <img src="{{ asset('storage/sample.jpg') }}" alt="Current Thumbnail" width="150">
                @endif

                <div class="form-group">
                    <label for="thumbnail">サムネイル画像</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                </div>


        </div>

        <div class="form-group">
            <label for="price">学年</label>

          <select name="grade_id">
              @foreach ($grades as $grade)
              <option value="{{ $grade->id }}">{{ $grade->name }}</option>
              @endforeach
          </select>
        </div>

        <div class="form-group">
            <label for="curriculums">授業名</label>
            <input type="text" class="form-control" id="" name="" placeholder="授業名" value="{{ $curriculums->name }}">
            @if($errors->has('curriculums->name'))
                <p>{{ $errors->first('curriculums->name') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="price">動画URL</label>
            <input type="text" class="form-control" id="" name="" placeholder="動画URL" value="{{ $curriculums->video_url }}">
            @if($errors->has('curriculums->video_url'))
                <p>{{ $errors->first('curriculums->video_url') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label for="price">授業概要</label>
        </div>


        <button class="btn btn-lg btn-primary btn-block" type="submit">登録</button>


    </form>


</div>

@endsection
