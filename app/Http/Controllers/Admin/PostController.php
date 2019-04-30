<?php

namespace App\Http\Controllers\Admin;

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

        if($request->all()){
            return response()->json([
                'code' => 200,
                'data' => $request->all(),
            ]);
        }
    }
}
