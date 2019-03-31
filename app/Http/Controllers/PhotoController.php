<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
  public function x(){
$m="HELLLLLOOO";
$arr=['php','angular','ruby'];
    return view('h/welcome')->with('x',$m)->with('arr',$arr);
  }
}
