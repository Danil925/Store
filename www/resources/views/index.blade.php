@extends('main')
@section('content')
    <h1>Регистрация/Авторизация</h1>
    <a href="/registration">Регистрация</a>
    <a href="/login">Авторизация</a>
    @auth()
        @if(Auth::user()->role == 1)
            <h1>Админ</h1>
            <a href="/logout">Выход</a>
        @endif
        @if(Auth::user()->role == 0)
            <h1>Пользователь</h1>
            <a href="/logout">Выход</a>
        @endif
    @endauth
@endsection
