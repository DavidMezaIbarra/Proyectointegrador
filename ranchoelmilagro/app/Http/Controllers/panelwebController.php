<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\noticia;
use Validator;

class panelwebController extends Controller
{
    //
    public function __construct(){
     $this->middleware('auth');
    }
    public function index(){
      //dd(Auth::user()->id);
      return view('panelAdmin1');
    }

    public function store(Request $req){
      //validando datos
      //dd('hola');
      $validator = Validator::make($req->all(),[
        'Imagen'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Noticia'=>'required|max:255',
        'Titulo'=>'required|max:255',
        'Descripcion'=>'required|max:255'
      ]);
      if($validator->fails()){
        //quiere decir que no esta correcto
        return redirect('/admin')
          ->withInput()
          ->withErrors($validator);
      }else{
        $nombreImg=time().'.'.$req->Imagen->getClientOriginalExtension();
        $req->Imagen->move(public_path('/img/noticias'),$nombreImg);
        noticia::create([
          'Id_usuario'=>Auth::user()->id,
          'Noticia'=>$req->Noticia,
          'Titulo_noticia'=>$req->Titulo,
          'Descripcion_noticia'=>$req->Descripcion ,
          'Imagen'=>$nombreImg

        ]);
        return redirect('/admin')
        ->with('mensaje','usuario agregado');
      }
      dd($req->nombre);
    }
}
