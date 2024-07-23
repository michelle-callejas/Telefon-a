<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('ver_clientes', 'ClientesController::index');
$routes->post ('agregar_cliente', 'ClientesController::agregarCliente');
$routes->get ('nuevo_cliente', 'ClientesController::nuevoCliente');



$routes->get('ver_planes', 'PlanesController::index');
$routes->get ('nuevo_plan', 'PlanesController::nuevoPlan');
$routes->post ('agregar_plan', 'PlanesController::agregarPlan');


$routes->get('ver_lineas', 'LineasController::index');
$routes->get ('nueva_linea', 'LineasController::nuevaLinea');
$routes->post ('agregar_linea', 'LineasController::agregarLinea');
