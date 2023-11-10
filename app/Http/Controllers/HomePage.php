<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    
    function artificial(){
       
        return view('artificial');
    }
    function facial(){
       
        return view('facial');
    }
    function special(){
       
        return view('special');
    }


}
