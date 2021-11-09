@extends('admins.main')

@section('content')
<div class="news">
    <h1>Day la trang HOME voi session la:{{($sessionUser)? $sessionUser->fullName :"khong ton tai session"}}</h1>
    <p>moi thanh vien tu admin cho den member deu vao xem duoc</p>
</div>
@endsection