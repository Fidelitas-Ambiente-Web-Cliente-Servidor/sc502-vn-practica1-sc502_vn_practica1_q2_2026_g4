<?php

require_once __DIR__ . '/../models/IndexModel.php';

class IndexController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new IndexModel();
    }

    public function index()
{
    $cursosDestacados = $this->modelo->getAll();
    $testimonios = $this->modelo->getTestimonios();

    $titulo = 'UProgra';
    $paginaActual = 'index';
    $estiloPagina = 'css/index.css';

    require_once __DIR__ . '/../views/index.php';
}
}