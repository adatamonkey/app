<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田健人', 'mail'=>'kento@yamada'],
            ['name'=>'山﨑いづみ', 'mail'=>'izumi@yamazaki']
        ];
        return view('hello.index', ['data'=>$data]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>$request->msg]);
    }
}
