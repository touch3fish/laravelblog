<?php

namespace App\Http\Controllers\Home;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use NoisyWinds\Smartmd\Markdown;

class IndexController extends Controller
{
    public function index(Request $request)
    {

//        $parse = new Markdown();
//        $text = "# Your markdown text";
//        $html = $parse->text($text);
//        return view('Smartmd::php-show',['content'=>$html]);
        $num = $request->input('num' , 5);
        $post = Post::where('id','>=','1')
            ->orderBy('created_at','desc')->paginate($num);
        return view('home.index' , compact('post'));
    }
}
