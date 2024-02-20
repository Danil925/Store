@extends('main')
@section('content')
    <form action="{{route('performance.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="file" name="picture">
        <input type="date" name="date">
        <input type="text" name="age" placeholder="age">
        <select name="genres">
            @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        </select>
        <input type="text" name="price" placeholder="price">
        <input type="submit">
    </form>
@endsection
