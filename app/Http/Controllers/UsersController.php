<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
}
