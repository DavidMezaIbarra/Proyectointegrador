<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index(){
      $noticias=\DB::table('noticia')
      //para seleccionar algo con where ->where('id','=','1')
        ->orderBy('id_noticia','desc')
        //limite->take(10)
        ->get();
      //dd(Auth::user()->id);
      return view('index')
        ->with('noticias',$noticias);

    }
}
