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

    public function send(){
        return view('pages.send');
    }
}
