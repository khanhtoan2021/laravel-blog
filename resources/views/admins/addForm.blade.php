@extends('admins.main')

@section('content')
<h1>User Information</h1>
<div class="card-body border w-50 my-3 m-auto">
	<form action="/admins/{{($userEdit)? 'update/'.$userEdit->id:'register'}}" method='post' enctype="multipart/form-data">
		 @csrf
		<div class="form-group">
			<label for="">Full Name</label>	
			<input class="form-control my-1" type="text" name="fullName" value="{{($userEdit)? $userEdit->fullName:''}}" required="required">
		</div>
		<div class="form-group">
			<label for="">Email</label>	
			<input class="form-control my-1" type="text" name="email" value="{{($userEdit)? $userEdit->email :''}}" required="required">
		</div>
		<div class="form-group">
			<label for="">Password</label>	
			<input class="form-control my-1" type="text" name="password" value="{{($userEdit)? $userEdit->password :''}}" required="required">
		</div>
		<div class="form-group">
			<label for="">Age</label>	
			<input class="form-control my-1" type="text" name="age" value="{{($userEdit)? $userEdit->age :''}}" required="required">
		</div>
		<div class="form-group">
			<label>Gender</label>
			<select class="form-control my-1" name="gender" value="{{($userEdit)? $userEdit->gender :''}}" required="required">
				<option value="Nam">Nam</option>
				<option value="Nữ">N&#x1EEF;</option>
			</select>
		</div>
		<div class="form-group">
			<label>Avatar</label>
			<input class="imgload form-control my-1" id="file" type="file" name="avatar"/>
			<img class="imgshow" src="#" align="left" style="width:50px" />
		</div>
		<div class="card-footer d-flex flex-row-reverse bg-light">
			<button class="btn btn-block btn-success" type="submit">{{($userEdit)? 'Update' :'Add'}}</button>
			<a class="btn btn-light bg-white me-2" href="/admins">Cancel</a>
		</div>	
	</form>
</div>
@endsection