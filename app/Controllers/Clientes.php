<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\ClientesModel; 

class Clientes extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $cliente=new ClientesModel();
        $datos ['datos']=$cliente-> findAll();
        
        //findAll()= select * from regiones
        return view('clientes', $datos);
    }
}
