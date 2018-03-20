<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class usuariosController extends Controller
{

    public function index(){
      $registros=\DB::table('users')
      //para seleccionar algo con where ->where('id','=','1')
        ->orderBy('id','asc')
        //limite->take(10)
        ->get();
      return view('usuarios')
      ->with('usuarios',$registros);
    }

    public function store(Request $req){
      //validando datos
      $validator = Validator::make($req->all(),[
        'nombre'=>'required|max:255',
        'contrasena'=>'required|max:255',
        'contranueva'=>'required|max:255'
      ]);
      if($validator->fails()){
        //quiere decir que no esta correcto
        return redirect('/admin/usuarios')
          ->withInput()
          ->withErrors($validator);
      }else{
        User::create([
          'email'=>$req->nombre,
          'password'=>bcrypt($req->contrasena)
        ]);
        return redirect('/admin/usuarios')
        ->with('mensaje','usuario agregado');
      }
      dd($req->nombre);
    }//function validator
    public function destroy($id){
      $usuario=User::find($id);
      /*para eliminar imagen*/
      if(file_exists(public_path('/img/noticia/'.$usuario->imagen))){
        unlink(public_path('img/noticias/'.$usuario->imagen));
    }
    $usuario->delete();
    return redirect('/admin/usuarios');

    }//function destroy
    public function edit(Request $req){
      $usuario=User::find($req->id);
      $usuario->email=$req->nameEditar;
      $usuario->password=bcrypt($req->pass2Editar);
      $usuario->save();
      return redirect()->to('/admin')
      ->with('mensaje','Actualizado');

    }//function edit
}
