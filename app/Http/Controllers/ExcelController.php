<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    //import
    public function import(Request $request){
        // $file =$request->all();
        // dump($file);exit;
        $file ='C:\Users\user\Desktop\test.csv';
        return view('File');
    }
}
