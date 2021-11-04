<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        for ($i=0; $i < ; $i++) { 
            if($i == 5) {
                echo "<pre>AAAA<br>";
                var_dump($i);
                exit("ENDDDDDDDDDDDDDD");
            }
        }
        return view('news'); // trả về trang news.blade.php
    }
} // không phải thiếu thẻ đóng php đâu, cấu trúc nó vậy :"(