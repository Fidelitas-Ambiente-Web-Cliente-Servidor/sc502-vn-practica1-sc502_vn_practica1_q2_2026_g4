<?php

require_once __DIR__ . '/../config/database.php';

class ContactoModel
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Database::conectar();
    }

    public function create($data): bool
    {
        $consulta = $this->conexion->prepare(
            'INSERT INTO contacto (nombre, email, telefono, asunto, mensaje)
             VALUES (:nombre, :email, :telefono, :asunto, :mensaje)'
        );

        return $consulta->execute([
            ':nombre' => $data['nombre'],
            ':email' => $data['email'],
            ':telefono' => $data['telefono'],
            ':asunto' => $data['asunto'],
            ':mensaje' => $data['mensaje']
        ]);
    }
}
