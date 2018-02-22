<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class panelController extends Controller
{
    //
    public function panelweb(){
      return view('panelAdmin');
    }
}
