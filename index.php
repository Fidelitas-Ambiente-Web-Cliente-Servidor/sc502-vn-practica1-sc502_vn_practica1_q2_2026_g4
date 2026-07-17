<?php

$controladorSolicitado = strtolower($_GET['controller'] ?? 'index');
$accion = $_GET['action'] ?? 'index';

$controladores = [
    'index' => [
        'archivo' => __DIR__ . '/controllers/IndexController.php',
        'clase' => 'IndexController'
    ],
    'cursos' => [
        'archivo' => __DIR__ . '/controllers/CursosController.php',
        'clase' => 'CursosController'
    ],
    'profesores' => [
        'archivo' => __DIR__ . '/controllers/ProfesoresController.php',
        'clase' => 'ProfesoresController'
    ],
    'contacto' => [
        'archivo' => __DIR__ . '/controllers/ContactoController.php',
        'clase' => 'ContactoController'
    ]
];

if (!isset($controladores[$controladorSolicitado])) {
    http_response_code(404);
    exit('Controlador no encontrado.');
}

$datosControlador = $controladores[$controladorSolicitado];

if (!file_exists($datosControlador['archivo'])) {
    http_response_code(404);
    exit('Este módulo todavía no está disponible.');
}

require_once $datosControlador['archivo'];

$controlador = new $datosControlador['clase']();

if (!method_exists($controlador, $accion)) {
    http_response_code(404);
    exit('Acción no encontrada.');
}

$controlador->$accion();