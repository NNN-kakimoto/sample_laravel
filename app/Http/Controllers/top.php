<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class top extends Controller
{
    //index
    public function index(){
        return view('index');
    }

    public function send(Request $request){
        $memo = $request->input('memo');
        //$request = "めも";
        //return view('pages.send', compact('memo'));
        // 「,」以降でビューに送るデータを変数に、"ビューでの変数名"=>$コントローラでの変数名
    }
}
