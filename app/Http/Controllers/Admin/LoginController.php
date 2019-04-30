<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $userinfo = $request->all();
        $query = User::where('account',$userinfo['account'])->first();
        if(Hash::check($userinfo['password'],$query['password'])) {
            return view('admin.admin');
        }else{
            return view('admin.login');
        }
    }
}
