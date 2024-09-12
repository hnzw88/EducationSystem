<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/extras/jquery.metadata.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/extras/jquery.metadata.min.js"></script>
    <script src = "{{ asset('js/product.js') }}"></script>


</head>
<body>
    <header>
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <nav>
            <ul>
                <li><a href="{{ url('/top') }}">授業管理</a></li>
                <li><a href="{{ url('/notice') }}">お知らせ管理</a></li>
                <li><a href="{{ url('/banner') }}">バナー管理</a></li>
            </ul>
        </nav>
        <a href="{{ route('logout') }}" class="logout">ログアウト</a>
    </header>
    <main>
      @if(Auth::check())
      <div class="user-info">
          <p>ユーザーネーム：{{ Auth::user()->name }}</p>
          <p>メールアドレス：{{ Auth::user()->email }}</p>
      </div>
      @endif
      @yield('content')
  </main>
</body>
</html>
