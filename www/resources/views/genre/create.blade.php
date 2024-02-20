@extends('main')
@section('content')
    <form action="{{route('genre.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="submit">
    </form>
@endsection
