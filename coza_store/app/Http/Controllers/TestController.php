<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('test');
    }

    public function one(){

        $name = "Rohim";
        $city = "Dhaka";

        //return view('home.home',compact('name','city'));

//        return view('home.home')->with([
//            'name'=>$name,
//            'city'=>$city
//        ]);

        return view('home.home',[
            'name'=>$name,
            'city'=>$city
        ]);
    }

    public function about(){
        return view('about');
    }

    public function myForm(Request $request){
        return $request->all();
    }
}
