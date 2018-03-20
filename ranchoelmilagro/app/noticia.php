<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    protected $primaryKey="id_noticia";

    protected $table = "noticia";

    protected $fillable=[
      'Id_usuario','Imagen','Noticia','Titulo_noticia','Descripcion_noticia'
    ];


}
