<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Страница@show</title>
</head>

<body>
    <header>
        <h2>HEADER</h2>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('admin.index') }}">Админка</a>
            <a href="{{ route('news.index') }}">Новости</a>
            <a href="{{ route('news.category.index') }}">Категории</a>
            <a href="{{ route('about') }}">О нас</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <h2>FOOTER</h2>
    </footer>

</body>

</html>