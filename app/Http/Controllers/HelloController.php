<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    //index
    public function index(){
        dunp("wegit-04");
        return view('welcome',['msg'=>'']);
    }
}
