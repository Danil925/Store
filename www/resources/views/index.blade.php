@extends('main')
@section('content')
    @guest()
        <h1>Регистрация/Авторизация</h1>
        <a href="/registration">Регистрация</a>
        <a href="/login">Авторизация</a>
    @endguest
    @auth()
        @if(Auth::user()->role)
            <h1>Админ</h1>
            <a href="/performance">Постановки</a>
            <a href="/performance/create">Добавить постановку</a>
            <a href="/genre">Жанры</a>
            <a href="/genre/create">Создать жанр</a>
            <a href="/logout">Выход</a>
        @endif
        @if(Auth::user()->role == 0)
            <h1>Пользователь</h1>
            <a href="/performance">Постановки</a>
            <a href="/logout">Выход</a>
        @endif
    @endauth
@endsection
