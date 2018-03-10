<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class usuariosController extends Controller
{

    public function index(){
      return view('usuarios');
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
          'name'=>$req->nombre,
          'password'=>bcrypt($req->contrasena)
        ]);
        return redirect('/admin/usuarios')
        ->with('mensaje','usuario agregado');
      }

      dd($req->nombre);

    }
}
