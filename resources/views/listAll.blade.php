@extends('layouts.main')

@section('content')
<h1>{{ $pageName }}</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Email</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->fullName}}</td>
            <td>{{$row->email}}</td>
            <td>Edit | Delete</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection