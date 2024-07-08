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

                <div class="announcements">
                    <h2>お知らせ</h2>
                    <p>最新のお知らせをここに表示します。</p>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
