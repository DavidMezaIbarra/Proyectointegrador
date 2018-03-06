<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginappController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
    function indexapp(){
      return view('loginapp');
    }
}
