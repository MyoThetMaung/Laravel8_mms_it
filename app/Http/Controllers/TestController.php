<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function myTest(){
        $a = 10;
        $b = 14;
        return $a + $b;
    }

    public function sumFun($x,$y){
        return "the result is ".($x+$y);
    }

    public function showName($name){
        return view('show_name',compact('name'));
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        return $request;
    }
    
}
