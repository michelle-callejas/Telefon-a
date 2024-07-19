<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\CiudadanosModel; 

class Ciudadanos extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $ciudadano=new CiudadanosModel();
        $datos ['datos']=$ciudadano-> findAll();
        
        //findAll()= select * from regiones
        return view('ciudadanos', $datos);
    }
}
