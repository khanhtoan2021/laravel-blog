@extends('admins.main')

@section('content')
<h1>Tên Trang - Users</h1>
<!-- <img src="storage/avatars/1636008679.674122900.thien nhien 2.jpeg" alt="anh"> -->
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Avatar</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Edit | Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($news as $row)
      <tr>
        <td><img src="/storage/avatars/{{$row->avatar}}" alt="" style="width:30px"></td>
        <td>{{$row->fullName}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->password}}</td>
        <td>{{$row->age}}</td>
        <td>{{$row->gender}}</td>
        <td><div class="d-flex"><a class="me-3" href="/admins/editForm/{{$row->id}}">Edit</a> <a href="/admins/delete/{{$row->id}}">Delete</a></div></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection