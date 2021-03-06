<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Агрегатор новостей</title>
    <style>
        .nav-link:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('main') }}" class="nav-link px-2 link-dark">Главная</a></li>
                <li><a href="{{ route('news') }}" class="nav-link px-2 link-dark">Новости</a></li>
                <li><a href="{{ route('categories') }}" class="nav-link px-2 link-dark">Категории</a></li>
                <li><a href="{{ route('review') }}" class="nav-link px-2 link-dark">Отзывы</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">О нас</a></li>
            </ul>

            <div class="col-md-3 text-end">
                @guest
                    @if (Route::has('login'))
                        <button type="button" onclick="window.location='{{ route('login') }}'" class="btn btn-primary me-2">Войти</button>
                    @endif

                    @if (Route::has('register'))
                        <button type="button" onclick="window.location='{{ route('register') }}'" class="btn btn-primary">Зарегистрироваться</button>
                    @endif
                @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('account') }}">
                                    {{ __('auth.forms.settings') }}
                                </a>
                                <a 
                                    class="dropdown-item" 
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                >
                                    {{ __('auth.forms.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endguest
            </div>
            
        </header>

        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-5">Наш агрегатор новостей</h1>
                <p class="lead">Скоро здесь будет агрегатор самых интересных новостей со всех точек земного шара!</p>
                <p>Разработка уже идет полным ходом, осталось лишь немного подождать!</p>
            </div>
        </main>

        <footer class="footer mt-auto py-3 bg-dark fixed-bottom">
            <div class="container">
                <span class="text-light">&copy; Cёмочкин Илья {{ now()->format('Y') }}</span>
            </div>
        </footer>
    </div>
</body>
</html>