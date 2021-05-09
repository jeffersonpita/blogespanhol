<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function post( int $p1 ){
      //return view('site.post', ['p1'=>$p1] );
      return view('site.post', compact('p1') );
    }
}
