<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\PlanesModel; 

class PlanesController extends BaseController
{
    public function index(): string
    {
        //creando un objeto de tipo RegionesModel
        $ciudadano=new PlanesModel();
        $datos ['datos']=$ciudadano-> findAll();
        
        //findAll()= select * from regiones
        return view('planes', $datos);
    }
    public function nuevoPlan():string 
    {
        return view('planes_nuevos');
    }
    public function agregarPlan()
    {
        $id = $this->request->getVar('txtId');
        $nombre=$this->request->getVar('txtNombre');
        $pago = $this->request->getVar('txtPagoMensual');
        $minutos = $this->request->getVar('txtCantidadMinutos');
        $mensajes = $this->request->getvar('txtCantidadMensajes');
        $planes = new PlanesModel();
        $datos=[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pago,
            'cantidad_minutos'=>$minutos,
            'cantidad_mensajes'=>$mensajes
        ];
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('ver_planes');
    }
  

}
