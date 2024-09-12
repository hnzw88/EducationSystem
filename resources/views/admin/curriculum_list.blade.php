@extends('layouts.app')

@section('title', 'トップページ')

@section('content')
    <div class="container">
        <h1>Welcome to the Top Page</h1>
        <p>表示中学年: 学年名</p>
        <div class="thumbnails">
            <img src="thumbnail_url" alt="サムネイル画像">
        </div>
        <h2>授業タイトル: 授業名</h2>
        <p>配信スケジュール: 時間</p>
        <p>常時公開</p> <!-- フラグに応じて表示を切り替える場合 -->

        <button>学年選択</button>
        <button>新規登録</button>
        <button>授業内容編集</button>
        <button>配信日時編集</button>
        <a href="{{ route('home') }}">戻る</a>
    </div>
@endsection
