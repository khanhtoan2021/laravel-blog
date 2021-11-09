<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.homePage');
    }
    public function listAll()
    {
        return view('posts.listAll');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHelper()
    {
        $kq=tong(2,3);
        exit($kq);
    }
    public function getPost()
    {
        $post = Post::find(3);
        $comments = $post->comments;
        //$comments = Comment::where(['post_id'=>3]);
        $user = $post->user;

        $category = $post->postcategory;
        exit($comments);
        //exit($users);
        //exit($comments);
        //return view('getPost');
    }
    public function queryPost()
    {
        //echo "xin chao";
        $posts = DB::table('posts')
                    ->where('id','3')
                    ->select('content', 'title')
                    ->get();
        $comments = DB::table('posts')
                    ->leftJoin('comments', 'posts.id', '=', 'comments.post_id')
                    ->leftJoin('users as pusers', 'posts.user_id', '=', 'pusers.id')
                    ->leftJoin('users as cusers', 'comments.user_id', '=', 'cusers.id')
                    ->select('posts.id as pid', 'posts.title', 'posts.content as pcontent', 'comments.content as ccontent', 'pusers.id as puid', 'pusers.email as puemail', 'pusers.fullName as pufullName' , 'cusers.id as cuid', 'cusers.email as cuemail', 'cusers.fullName as cufullName')
                    ->where('posts.id',3)
                    ->get();
        exit($comments);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
