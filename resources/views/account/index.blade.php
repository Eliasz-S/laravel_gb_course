<h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
<br>
<a href="{{ route('admin.index') }}">В админку</a>
<br>
<a href="{{ route('logout') }}">Выход</a>