@extends('main')
@section('content')
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>
@endsection
