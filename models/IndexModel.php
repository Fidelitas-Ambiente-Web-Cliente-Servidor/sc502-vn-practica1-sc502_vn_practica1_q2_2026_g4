<?php

require_once __DIR__ . '/../config/database.php';

class IndexModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::conectar();
    }

    public function getAll()
    {
        $consulta = $this->conexion->prepare(
            'SELECT id_curso_destacado, nombre, descripcion, imagen, categoria
             FROM cursos_destacados
             ORDER BY id_curso_destacado'
        );

        $consulta->execute();

        return $consulta->fetchAll();
    }

    public function getTestimonios()
    {
        $consulta = $this->conexion->prepare(
            'SELECT id_testimonio, nombre, ubicacion, imagen, comentario
             FROM testimonios
             ORDER BY id_testimonio'
        );

        $consulta->execute();

        return $consulta->fetchAll();
    }
}