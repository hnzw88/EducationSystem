@extends('layouts.app')

@section('title', 'Top Page')

@section('content')
<div class="container">

        @if (Auth::check())
            <p>ユーザー名: {{ Auth::user()->name }}</p>
            <p>メールアドレス: {{ Auth::user()->email }}</p>
            <pre>{{ print_r(Auth::user(), true) }}</pre>
        @else
            <p>ログインしていません。</p>
        @endif
    </div>
@endsection
