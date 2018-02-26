<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panelController extends Controller
{
    //
    public function panelapp(){
      return view('panelAdmin');
    }
}
