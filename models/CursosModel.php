<?php

require_once __DIR__ . '/../config/database.php';

class CursosModel
{
    private PDO $conexion;

    public function __construct()
    {
        $this->conexion = Database::getInstance()->getConnection();
    }

    /**
     * Obtiene todos los cursos
     */
    public function getAll(): array
    {
        $sql = "SELECT *
                FROM cursos
                ORDER BY nombre";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


     // Obtiene los cursos filtrados por categoría

    public function getByCategory(string $categoria): array
    {
        $sql = "SELECT *
                FROM cursos
                WHERE categoria = :categoria
                ORDER BY nombre";

        $stmt = $this->conexion->prepare($sql);

        $stmt->bindValue(
            ':categoria',
            $categoria,
            PDO::PARAM_STR
        );

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

 
     //Obtiene todas las categorías para llenar el Select
   
    public function getCategories(): array
    {
        $sql = "SELECT DISTINCT categoria
                FROM cursos
                ORDER BY categoria";

        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}