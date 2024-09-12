<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <header>
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">

       <div class="card-header">管理ログイン</div>

        <nav>
            <ul>
                <li><a href="{{ url('/curriculum_list') }}">授業管理</a></li>
                <li><a href="{{ url('/notice') }}">お知らせ管理</a></li>
                <li><a href="{{ url('/banner') }}">バナー管理</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                       @csrf
                      <button type="submit">ログアウト</button>
                </form>
            </ul>
        </nav>
    </header>
    <main>
      @if(Auth::check())
      <div class="user-info">
          <p>ユーザーネーム：{{ Auth::user()->name }}</p>
          <p>メールアドレス：{{ Auth::user()->email }}</p>
      </div>
      @endif

  </main>
</body>
</html>
