<?php

namespace App\Controllers;

use App\Models\LineasModel;
use CodeIgniter\HTTP\RedirectResponse;

class LineasController extends BaseController
{
    public function index(): string
    {
        $linea = new LineasModel();
        $datos['datos'] = $linea->findAll();
        
        return view('lineas_telefonicas', $datos);
    }

    public function nuevaLinea(): string
    {
        return view('lineas_nuevas');
    }

    public function agregarLinea()
    {
        $linea = new LineasModel();
        $id = $this->request->getVar('txtNumero');
        $fecha = $this->request->getVar('txtFechaPago');
        $meses = $this->request->getVar('txtMesesAtraso');
        $plan = $this->request->getVar('txtPlanId');
        $cliente = $this->request->getVar('txtClienteId');

        $datos = [
            'no_telefono' => $id,
            'fecha_pago' => $fecha,
            'meses_atraso' => $meses,
            'plan_id' => $plan,
            'cliente_id' => $cliente
        ];

        $linea->insert($datos);

        return redirect()->route('ver_lineas');
    }
}
