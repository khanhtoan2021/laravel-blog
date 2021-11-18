<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;

class UsersController extends Controller
{
    public function listAll()
    {
        $news = DB::table('users')->select('*');
        $news = $news->get();
        //printf($news);
        $pageName = 'Tên Trang - Users';

        return view('listAll', compact('news', 'pageName'));
    }
    public function getLogin(){
        return view('users.getLogin',['sessionUser'=>Session::get('user')]);
    }
    public function postLogin(Request $request){
        //$request->validate();
        $arr=[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($arr)) {
            //$ss=$request->session()->regenerate();
            $user = Auth::user();
            Session::put('user', $user);
            return redirect('/posts/home');
        }else{
            return back()->withErrors([
         'password' => 'The provided credentials do not match our records.',
        ]);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();// delete all session
        return redirect('/posts/home');
    }    
}
