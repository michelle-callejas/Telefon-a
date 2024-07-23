<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\ClientesModel; 

class ClientesController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $cliente=new ClientesModel();
        $datos ['datos']=$cliente-> findAll();
        
        //findAll()= select * from regiones
        return view('clientes', $datos);
    }

    public function nuevoCliente():string
    {
        return view('clientes_nuevos');
    }

    public function agregarCliente()
    {
        $datos=[
            'cliente_id'=>$this->request ->getVar('txtId'),
            'nombre'=>$this->request ->getVar('txtNombre'),
            'apellido'=>$this->request ->getVar('txtApellido'),
            'correo_electronico'=>$this->request ->getVar('txtCorreo'),
            'calle_avenida'=>$this->request ->getVar('txtCalleAvenida'),
            'no_casa'=>$this->request ->getVar('txtNoCasa'),
            'zona'=>$this->request ->getVar('txtZona')

        ];



        //creando objeto de tipo clientesModel
        $cliente=new ClientesModel();
        $cliente-> insert ($datos); //inserta todos los valores, insert into..
        echo "Datos guardados";
        return redirect()->route('ver_clientes');
    }



}
