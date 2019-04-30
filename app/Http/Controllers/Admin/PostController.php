<?php

namespace App\Http\Controllers\Admin;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.post.createpost');
    }

    public function create(Request $request)
    {
        $res = $request->all();
        if($res){
            $post = new Post();
            $post->title = $res['title'];
            $post->content = $res['editor'];
            $post->author = 'god';
            $post->save();
            return response()->json([
                'code' => 200,
                'data' => '成功',
            ]);
        }
    }
}
