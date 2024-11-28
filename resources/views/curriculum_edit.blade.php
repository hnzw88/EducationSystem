@extends('layouts.app')

@section('title', 'トップページ')

@section('content')


<div class="container">
    <h1>授業設定</h1>
    

    <form action="{{ route('curriculum.update',$curriculum->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
        

                <!-- 既存のサムネイルを表示 -->
                
                <img src="{{ asset($curriculum->thumbnail) }}" alt="Current Thumbnail" width="150">
                

                <div class="form-group">
                    <label for="thumbnail">サムネイル画像</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">

                    @error('thumbnail')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


        </div>


        <div class="form-group">
            <label for="price">学年</label>

          <select name="curriculum_id">
            <option value="{{ $gradeId }}">{{ $curriculum->grade->name }}</option>
              @foreach ($grades as $grade)
              
              @if($curriculum->grade->name !== $grade->name)
              <option value="{{ $grade->id }}">{{ $grade->name }}>
              </option>
              @endif
              @endforeach
          </select>
          @error('grade_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="curriculum">授業名</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="授業名" value="{{ old('title',$curriculum->title) }}">
            @if($errors->has('title'))
                <p>{{ $errors->first('title') }}</p>
            @endif
            @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="price">動画URL</label>
            <input type="text" class="form-control" id="" name="video_url" placeholder="動画URL" value="{{ old('video_url',$curriculum->video_url) }}">
            @if($errors->has('video_url'))
                <p>{{ $errors->first('curriculum->video_url') }}</p>
            @endif
            @error('video_url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="price">授業概要</label>
            <input type="text" class="form-control" id="" name="description" placeholder="授業概要" value="{{ $curriculum->description }}">
            @if($errors->has('curriculum->video_url'))
                <p>{{ $errors->first('curriculum->video_url') }}</p>
            @endif
            @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
        </div>

        <label>
          
           <input type="hidden" name="alway_delivery_flg" value="0">
           <input type="checkbox" name="tags" value="{{ $curriculum->alway_delivery_flg }}"
            {{ $curriculum->alway_delivery_flg  == 1 ? 'checked' : '' }}> 常時公開
            @error('alway_delivery_flg')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

        </label>


        <button class="btn btn-lg btn-primary btn-block" type="submit">登録</button>

        

        <button type="button" onclick="location.href='{{route('show.curriculum.list') }}' ">戻る</button>


    </form>


</div>

@endsection
