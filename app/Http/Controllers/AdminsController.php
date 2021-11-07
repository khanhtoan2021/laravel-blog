<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\RegisterRequest;
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
	public function add(RegisterRequest $request) {
		if($request->hasFile('avatar')) {
		//$image = $request->file('avatar');
			$image = $request->avatar;
			$fileName=time().'.'.rand().'.'.$image->getClientOriginalName();
			$image->storeAs('public/avatars',$fileName,'local'); //public inside of storage folder
		}else{
			$fileName='';
		}
		$data=[
			'fullName'=>$request->fullName,
			'email'=>$request->email,
			'password'=>bcrypt($request->password),
			'age'=>$request->age,
			'gender'=>$request->gender,
			'avatar'=>$fileName
		];
		DB::table('users')->insert($data);
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
	public function login(AdminRequest $request){
		//$request->validate();
		$arr=[
			'email'=>$request->email,
			'password'=>$request->password
		];
		if (Auth::attempt($arr)) {

			//$ss=$request->session()->regenerate();
			$user = Auth::user();
			echo "<pre>";
			var_dump($user->fullName);
			//printf($user);
			exit("uuuu");
			return redirect('/admins/home');
		}else{
			return back()->withErrors([
         'password' => 'The provided credentials do not match our records.',
     	]);
		}
	}
	public function logout(){
		Auth::logout();
  return redirect('/admins/login');
	}
	public function home(){
		return view('admins.home');
	}
	public function member(){
		return view('roles.member');
	}
	public function adminPage(){
		return view('roles.admin');
	}
	public function test(){
		// get all user ok
		// $users = DB::table('users')->get();
		// foreach ($users as $user) {
  //   	echo $user->fullName;
  //   	echo "<br>";
		// }
		$user = DB::table('users')->where('email', 'ktoan86@yahoo.com')->first();
		//var_dump($user->password);
		$password = bcrypt('123456');
		echo $password;
		$str='$2y$10$HqC3i3A1GtT1OqeIHw6OPOvK6SSmExOeGpq5i0UFvfE/UpuTXVLOS';
		if ($password===$str) {
			// code...echo
			echo "password da dung";
		}else{
			echo "password da sai";
		}
		exit();
	}

}
