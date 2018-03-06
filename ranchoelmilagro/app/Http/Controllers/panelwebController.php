<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panelwebController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function panelweb(){
      return view('panelAdmin1');
    }
}
