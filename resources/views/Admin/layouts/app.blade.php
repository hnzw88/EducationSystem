<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('管理画面') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="{{asset('/css/admin_app.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/admin.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <div class="container">
              
                <div class="buttons"> 
                    <button class="btn" type="button" onclick="location.href='./curriculum_list'">{{ __('授業管理') }}</button>
                    <button class="btn" type="button" onclick="location.href='./article_list'">{{ __('お知らせ管理') }}</button>
                    <button class="btn" type="button" onclick="location.href='./banner_edit'">{{ __('バナー管理') }}</button>
                </div>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->                                    
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('admin/login')}}">{{ __('ログイン') }}</a>
                            </li>
                                
                        @else
                            <li class="nav-item dropdown">
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('admin/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>
                                    <form id="logout-form" action="{{url('admin/logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
