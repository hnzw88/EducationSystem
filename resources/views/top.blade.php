@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('トップ画面') }}</div> -->

                <div class="banner-section">
                    @foreach($banners as $banner)
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" class="banner-image">
                    @endforeach
                    <div class="banner-dots">
                        @foreach($banners as $index => $banner)
                            <span class="dot" onclick="currentSlide({{ $index + 1 }})"></span>
                        @endforeach
                    </div>
                </div>

                <div class="articles-section">
                    <h2>お知らせ</h2>
                    <ul>
                        @foreach($articles as $article)
                            <li>
                                <a href="{{ url('/user/login') }}">{{ $article->title }}</a> - {{ $article->posted_date }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
