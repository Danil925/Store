@extends('main')
@section('content')
    <h1>Жанры</h1>
    <table border="1">
        <thead>
        <tr>
            <th>Name</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($genres as  $genre)
                <td>{{$genre->name}}</td>
                <td><form action="/genre/{{$genre->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button>Удалить</button>
                    </form></td>
            @endforeach
        </tr>
        </tbody>
    </table>
    <a href="/">Назад</a>
@endsection
