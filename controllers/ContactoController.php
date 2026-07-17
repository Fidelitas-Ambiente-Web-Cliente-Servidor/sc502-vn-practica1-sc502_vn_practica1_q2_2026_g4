<?php

require_once __DIR__ . '/../models/ContactoModel.php';

class ContactoController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new ContactoModel();
    }

    // Muestra la vista del formulario de contacto
    public function index(): void
    {
        $titulo = 'Contacto - UProgra';
        $paginaActual = 'contacto';
        $estiloPagina = 'css/contacto.css';
        $scriptPagina = 'js/contacto.js';

        // Variables opcionales para alertas
        $exito = isset($_GET['success']) && $_GET['success'] == 1;

        require_once __DIR__ . '/../views/contacto.php';
    }

    // Recibe los datos del formulario, valida y guarda en la bd
    public function store(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php?controller=contacto&action=index');
            exit;
        }

        // Saneamiento
        $datos = $this->sanitizarEntrada($_POST);

        // Validacion
        if (
            empty($datos['nombre']) ||
            empty($datos['email']) ||
            empty($datos['telefono']) ||
            empty($datos['asunto']) ||
            empty($datos['mensaje'])
        ) {
            $error = 'Todos los campos son obligatorios.';
            $titulo = 'Contacto - UProgra';
            $paginaActual = 'contacto';
            $estiloPagina = 'css/contacto.css';
            $scriptPagina = 'js/contacto.js';

            require_once __DIR__ . '/../views/contacto.php';
            return;
        }

        // Insertar en bd
        $guardado = $this->modelo->create($datos);

        if ($guardado) {
            // Redirigir para evitar reenvío de formulario al recargar
            header('Location: index.php?controller=contacto&action=index&success=1');
            exit;
        } else {
            $error = 'Ocurrió un error al guardar. Por favor intenta más tarde.';
            $titulo = 'Contacto - UProgra';
            $paginaActual = 'contacto';
            $estiloPagina = 'css/contacto.css';
            $scriptPagina = 'js/contacto.js';

            require_once __DIR__ . '/../views/contacto.php';
        }
    }

    private function sanitizarEntrada(array $entrada): array
    {
        return array_map(function ($valor) {
            return htmlspecialchars(trim($valor), ENT_QUOTES, 'UTF-8');
        }, $entrada);
    }
}
