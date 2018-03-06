<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panelController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function panelapp(){
      return view('panelAdmin');
    }
}
