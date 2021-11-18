@extends('layouts.main')

@section('content')
<h1>Login Information</h1>
<div class="card-body border w-50 my-3 m-auto">
  <div class="d-flex flex-column">
    <img class="m-auto" src="/storage/avatars/myAvatar.png" alt="my avatar" style="width: 150px;">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
  <form action="/users/login" method='post' enctype="multipart/form-data">
     @csrf
    <div class="form-group">
      <label for="">Email</label> 
      <input class="form-control my-1" type="text" name="email" required="required">
    </div>
    <div class="form-group">
      <label for="">Password</label>  
      <input class="form-control my-1" type="password" name="password" required="required">
    </div>
    <div class="card-footer d-flex flex-row-reverse bg-light">
      <button class="btn btn-block btn-success" type="submit">Login</button>
      <a class="btn btn-light bg-white me-2" href="/admins">Cancel</a>
    </div>  
  </form>
</div>
@endsection