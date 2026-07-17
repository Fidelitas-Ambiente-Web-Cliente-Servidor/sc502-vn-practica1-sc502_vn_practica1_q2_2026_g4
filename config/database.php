<?php

class Database
{
    private static $conexion = null;

    private function __construct()
    {
    }

    public static function conectar()
    {
        if (self::$conexion === null) {
            $host = 'db';
            $baseDatos = 'uprogra_db';
            $usuario = 'appuser';
            $contrasena = 'apppass';

            $dsn = "mysql:host=$host;dbname=$baseDatos;charset=utf8mb4";

            self::$conexion = new PDO($dsn, $usuario, $contrasena);
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }

        return self::$conexion;
    }
}