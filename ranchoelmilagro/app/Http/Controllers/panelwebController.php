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
    $noticias=\DB::table('noticia')
    //para seleccionar algo con where ->where('id','=','1')
      ->orderBy('id_noticia','desc')
      //limite->take(10)
      ->get();
    //dd(Auth::user()->id);
    return view('panelAdmin1')
      ->with('noticias',$noticias);
  }

    public function store(Request $req){
      //validando datos
      //dd('hola');
      $validator = Validator::make($req->all(),[
        'Imagen'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'Noticia'=>'required|max:255',
        'Titulo'=>'required|max:255',
        'Descripcion'=>'required|max:255'
      ]);//validator
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
          'Imagen'=>$nombreImg,
          'id_noticia'=>$req->id_noticia
        ]);
        return redirect('/admin')
        ->with('mensaje','usuario agregado');
      }//else
    }//store
    public function edit(Request $req){
      $nombreImg=time().'.'.$req->uploadBtn;
      $noticias=noticia::find($req->id_noticia);
      $noticias->Imagen=$nombreImg;
      $noticias->Noticia=$req->noticiaeditar;
      $noticias->Titulo_noticia=$req->tituloeditar;
      $noticias->Id_usuario=Auth::user()->id;
      $noticias->Descripcion_noticia=$req->descripcioneditar;
      $noticias->save();
      return redirect()->to('/admin')
      ->with('mensaje','Actualizado');
    }//function edit


    public function destroy($id_noticia){
      $noticias=noticia::find($id_noticia);
      //dd($noticias=noticia::find($id_noticia));
      /*para eliminar imagen*/
      if(file_exists(public_path('/img/noticia/'.$noticias->imagen))){
        unlink(public_path('img/noticias/'.$noticias->imagen));
    }
    $noticias->delete();
    return redirect('/admin');

    }//function destroy

}
