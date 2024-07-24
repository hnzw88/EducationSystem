@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('トップ画面') }}</div>

                <div class="banner">
                    <img src="{{ asset('images/banner.jpg') }}" alt="Banner">
                </div>

                <h1>お知らせ</h1>
                <ul>
                    @foreach ($articles as $article)
                    <li>{{ $article->posted_date }} {{ $article->title }}</li>
                    @endforeach
                </ul>
                
            </div>
        </div>
    </div>
</div>
@endsection
