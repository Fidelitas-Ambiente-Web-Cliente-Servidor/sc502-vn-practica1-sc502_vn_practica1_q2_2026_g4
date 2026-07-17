<?php

require_once __DIR__ . '/../config/database.php';

class ProfesoresModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    // Obtener todos los profesores
    public function getAll(): array
    {
        $stmt = $this->db->query(
            "SELECT * FROM profesores ORDER BY nombre ASC"
        );

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un profesor por id
    public function getById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM profesores WHERE id = :id"
        );

        $stmt->execute([
            ":id"=>$id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}