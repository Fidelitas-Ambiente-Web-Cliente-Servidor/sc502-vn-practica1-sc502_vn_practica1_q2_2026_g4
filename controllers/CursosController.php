<?php

require_once __DIR__ . '/../models/CursosModel.php';

class CursosController
{
    private CursosModel $model;

    public function __construct()
    {
        $this->model = new CursosModel();
    }

    
     // Muestra el listado de cursos
     
    public function index(): void
{
    $categoria = trim($_GET['categoria'] ?? '');

    if (!empty($categoria)) {
        $cursos = $this->model->getByCategory($categoria);
    } else {
        $cursos = $this->model->getAll();
    }

    $categorias = $this->model->getCategories();

    // Variables para el header
    $titulo = "Cursos";
    $paginaActual = "cursos";
    $estiloPagina = "css/cursos.css";
    $scriptPagina = "js/cursos.js";

    require_once __DIR__ . '/../views/cursos.php';
}
}