@extends('main')
@section('content')
    <h1>Постановки</h1>
    <table border="1">
        <thead>
        <tr>
            <th>Name</th>
            <th>Picture</th>
            <th>Date</th>
            <th>Age</th>
            <th>Price</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($performances as  $performance)
                <td>{{$performance->name}}</td>
                <td><img src="{{Storage::url($performance->picture)}}" alt="" width="200px"></td>
                <td>{{$performance->date}}</td>
                <td>{{$performance->genres->name}}</td>
                <td>{{$performance->age}}</td>
                <td>{{$performance->price}}</td>
                <td><a href="/performance/edit">Редактировать</a></td>
                <td>
                    <form action="/performance/{{$performance->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button>Удалить</button>
                    </form>
                </td>
            @endforeach
        </tr>
        </tbody>
    </table>
    <a href="/">Назад</a>
@endsection
