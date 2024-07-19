<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\LineasModel; 

class Lineas extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $linea=new LineasModel();
        $datos ['datos']=$linea-> findAll();
        
        //findAll()= select * from regiones
        return view('lineas_telefonicas', $datos);
    }
}
