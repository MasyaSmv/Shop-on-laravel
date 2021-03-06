<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админка: @yield('title', )</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Scripts -->
    <script type="text/javascript" nonce="30df6b7172bd48cb99ceead7967"
        src="//local.adguard.org?ts=1632897569246&amp;type=content-script&amp;dmn=internet-shop.tmweb.ru&amp;app=chrome.exe&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1&amp;sbe=0&amp;stealth=1&amp;uag=">
    </script>
    <script type="text/javascript" nonce="30df6b7172bd48cb99ceead7967"
        src="//local.adguard.org?ts=1632897569246&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Extra&amp;type=user-script">
    </script>
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                    Вернуться на сайт
                </a>

                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        @admin
                        <li class="mr-3"><a href="{{ route('categories.index') }}">Категории</a></li>
                        <li class="mr-3"><a href="{{ route('products.index') }}">Товары</a>
                        <li class="mr-3"><a href="{{ route('properties.index') }}">Свойства</a>
                        <li class="mr-3"><a href="{{ route('property-options.index') }}">Варианты свойства</a>
                        <li class="mr-3"><a href="">Купоны</a>
                        <li class="mr-3"><a href="">Поставщики</a>
                        </li>
                        <li><a href="{{ route('home') }}">Заказы</a></li>
                        @endadmin
                    </ul>

                    @guest
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
                        </li>
                    </ul>
                    @endguest

                    @auth
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @admin Администратор @else {{ Auth::user()->name }} @endadmin
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ route('logout')}}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endauth
                </div>
            </div>
        </nav>

        <div class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
