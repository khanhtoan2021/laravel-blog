<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.homePage',['sessionUser'=>Session::get('user')]);
    }
    public function listAll()
    {
        $posts = DB::table('posts')
                    ->join('users', 'posts.user_id', '=', 'users.id')
                    ->join('post_categories', 'posts.postCategory_id', '=', 'post_categories.id')
                    ->select('posts.*', 'users.fullName as uPost_fullName', 'users.avatar as uPost_avatar','post_categories.article')
                    ->get();
        //return $posts;         
        return view('posts.listAll',['posts'=>$posts,'sessionUser'=>Session::get('user')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHelper()
    {
        $kq=tong(2,3)*123;
        printf($kq);
        exit($kq);
    }
    public function getPost()
    {
        $post = Post::find(3);
        $comments = $post->comments;
        //$comments = Comment::where(['post_id'=>3]);
        $user = $post->user;

        $category = $post->postcategory;
        exit($category);
        //exit($users);
        //exit($comments);
        //return view('getPost');
    }
    public function queryPost()
    {
        $comments = DB::table('comments')
            ->select('post_id',DB::raw('count(post_id) as comments'))
            ->groupBy('post_id')
            ->get();
        $posts=DB::table('posts')
            ->joinSub($comments, 'posts_id',function ($join) {
                        $join->on('posts.id', '=', '$comments.post_id');
                    })->get();    
        return $posts;    
    }
    public function queryPost_OK_runSQL()
    {
        $comments=DB::select("SELECT P.id,P.content, TV.comments, U.fullName FROM `posts` AS P INNER JOIN users as U ON P.user_id = U.id INNER JOIN( SELECT P.id, IFNULL(CM.CM, 0) AS comments FROM `posts` AS P LEFT JOIN( SELECT post_id, COUNT(post_id) AS CM FROM `comments` GROUP BY post_id ) CM ON P.id = CM.post_id ) TV ON P.id = TV.id"
        );
        return $comments;                    
    }
    public function queryPost1()
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
                    ->where('posts.id',10)
                    ->get();
        exit($comments);
    }
    public function getPostForm()
    {
        if(Auth::check()){
            $categories = DB::table('post_categories')
                        ->select('id', 'article')
                        ->get();
            return view('posts.getPostForm',['categories'=>$categories,'postEdit'=>'','sessionUser'=>Session::get('user')]);
        }else{
            return redirect('/users/login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $cm = DB::table('posts')
                    ->select('SELECT P.id,IFNULL(CM.CM, 0) AS comments FROM `posts` as P LEFT JOIN (SELECT post_id,COUNT(post_id) AS CM FROM `comments` GROUP BY post_id ) CM ON P.id= CM.post_id'
);
        exit($cm);
    }
    public function addPost(Request $request)
    {
        if($request->hasFile('thumbnail')) {
            $thumbnail = $request->thumbnail;
            $fileName=time().'.'.rand().'.'.$thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/thumbnails',$fileName,'local'); //public inside of storage folder
        }else{
            $fileName='';
        }
        DB::table('posts')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $fileName,
            'user_id' => Session::get('user')->id,
            'postCategory_id' =>$request->postCategory_id
        ]);
        return redirect('/posts/home');
    }
    public function uploadImages(Request $request)
    {
        if($request->hasFile('upload')) {
            $upload = $request->upload;
            $fileName=time().'.'.rand().'.'.$upload->getClientOriginalName();
            $upload->storeAs('public/contents',$fileName,'local'); //public inside of storage folder
        }
        //$fileName="hinh1.png";
        return response()->json([
            'fileName' => $fileName,
            'uploaded' => 1,
            'url' => '/storage/contents/'.$fileName
        ]);
    }
    public function myAjax(Request $request)
    {
        return response()->json($request->a);
        // $fileName="xin chao ban";
        // return response()->json([
        //     'fileName' => $fileName,
        //     'uploaded' => 1,
        //     'url' => 'public/contents/'+$fileName
        // ]);
    }
    public function getproduct(Request $request)
    {
        echo "chao ban";
        exit('here');
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
