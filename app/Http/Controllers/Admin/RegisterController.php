<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register');
    }


    public function register(Request $request)
    {
        $info = $request->all();
        validator::make($info,[
                'nickname' => ['required' , 'string' , 'max:10'],
                'account'  => ['required' , 'string' , 'min:6' ,'max:10'],
                'password' => ['required' , 'string' , 'max:10' , 'min:6'],
        ]);
           $user =  User::create([
                'nickname' => $info['nickname'],
                'account'  => $info['account'],
                'password' => Hash::make($info['password']),
            ]);
           return view('admin.admin');
    }

}
