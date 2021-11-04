<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class AdminsController extends Controller
{
	public function listAll(){
		$news = DB::table('users')->select('*')->get();
				//$news = $news->get();
				//printf($news);
		$pageName = 'Tên Trang - Users';
		return view('admins.listAll', compact('news', 'pageName'));
	}
	public function addForm(){
		return view('admins.addForm',["userEdit"=>""]); //addForm the same editForm
	}
	public function add(Request $request) {
		if($request->hasFile('avatar')) {
		//$image = $request->file('avatar');
			$image = $request->avatar;
			$fileName=time().'.'.rand().'.'.$image->getClientOriginalName();
			$image->storeAs('public/avatars',$fileName,'local'); //public inside of storage folder
		}else{
			$fileName='';
		}

		$users = new User;
		$users->fullName = $request->fullName; 
		$users->email = $request->email;
		$users->password = bcrypt($request->password);
		$users->age = $request->age; 
		$users->gender = $request->gender; 
		$users->avatar = $fileName;
		$users->save();
		return redirect('/admins');
	}
	public function delete($id) {
		DB::table('users')->where('id',$id)->delete();
		return redirect('/admins');
	}
	public function editForm($id) {//show edit form where id=$id from client
		$users = new User;
		$userEdit=$users->find($id);	
		return view('/admins.addForm',["userEdit"=>$userEdit]); //the same register form
	}
	public function update(Request $request,$id) {
		$affected = DB::table('users')
              ->where('id', $id)
              ->update(['fullName'=>$request->fullName,
              					'email'=>$request->email,
              					'password'=>$request->password,
              					'age'=>$request->age,
              					'gender'=>$request->gender
            ]);
		return redirect('/admins');
	}
	public function loginForm(){
		return view('admins.loginForm');
	}
	public function login(Request $request){
		//printf($request->email);
		//printf($request->password);
		//$users = new User;
		$email =$request->input('email');
    $pass = User::where('email',$email)->first();

		//$pass = User::where('email', $request->email);
		//$post = Post::where('id', $id);
		printf($pass);

		exit("vao login");
	}
	public function test(){
		$password = bcrypt('my-secret-password');
		$str='$2y$10$/0Jm8APPA3.bodn3/sxdIebFE1ZXiZxl0tlSGTyqv/vdJhpm8q4zq';
		exit($password);
	}

}
