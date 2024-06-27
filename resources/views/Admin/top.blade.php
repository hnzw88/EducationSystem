@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::guard('admin')->check())
                        <ul class="user">
                            <li class="hyouzi">ユーザーネーム：{{Auth::guard('admin')->user()->name}}</li>
                            <li class="hyouzi">メールアドレス：{{Auth::guard('admin')->user()->email}}</li>
                        </ul>    
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
