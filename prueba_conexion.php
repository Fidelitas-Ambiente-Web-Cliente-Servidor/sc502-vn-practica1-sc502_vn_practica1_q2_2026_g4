<?php

$host = 'db';
$baseDatos = 'uprogra_db';
$usuario = 'appuser';
$contrasena = 'apppass';

try {
    $dsn = "mysql:host=$host;dbname=$baseDatos;charset=utf8mb4";

    $conexion = new PDO($dsn, $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $conexion->prepare(
        'SELECT nombre, categoria FROM cursos_destacados ORDER BY id_curso_destacado'
    );

    $consulta->execute();
    $cursos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    echo '<h1>Conexión realizada correctamente</h1>';
    echo '<p>Cursos encontrados: ' . count($cursos) . '</p>';

    echo '<ul>';

    foreach ($cursos as $curso) {
        echo '<li>' . htmlspecialchars($curso['nombre'])
            . ' — ' . htmlspecialchars($curso['categoria']) . '</li>';
    }

    echo '</ul>';
} catch (PDOException $error) {
    echo '<h1>Error de conexión</h1>';
    echo '<p>' . htmlspecialchars($error->getMessage()) . '</p>';
}