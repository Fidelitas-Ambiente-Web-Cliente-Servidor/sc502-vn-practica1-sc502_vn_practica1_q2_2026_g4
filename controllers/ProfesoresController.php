<?php

require_once __DIR__ . '/../models/ProfesoresModel.php';

class ProfesoresController
{
    private ProfesoresModel $model;

    public function __construct()
    {
        $this->model = new ProfesoresModel();
    }

    // Mostrar todos los profesores
    public function index()
    {
        $profesores = $this->model->getAll();

        require __DIR__ . '/../views/layout/header.php';
        require __DIR__ . '/../views/profesores/index.php';
        require __DIR__ . '/../views/layout/footer.php';
    }

    // Mostrar un profesor
    public function show($id)
    {
        $profesor = $this->model->getById($id);

        require __DIR__ . '/../views/layout/header.php';
        require __DIR__ . '/../views/profesores/show.php';
        require __DIR__ . '/../views/layout/footer.php';
    }
}