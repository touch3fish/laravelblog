<?php

namespace App\Http\Controllers\Home;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $num = $request->input('num' , 5);
        $post = Post::where('id','>=','1')
            ->orderBy('created_at','desc')->paginate($num);
        return view('home.index' , compact('post'));
    }
}
