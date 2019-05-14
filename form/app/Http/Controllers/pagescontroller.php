<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    
    public function  home() {
        $tasks = [
            "Go to the Store" ,
            "Go to the market" ,
            "Go to new city"
        ];
    
        $foo =  request("title");
       // $foo1 = '<script>alert("foobar")</script>'; 
    
        return view('welcome' , compact('tasks', 'foo' ));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about(){
        return view('about');
    }
}
