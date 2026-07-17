<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($titulo ?? 'UProgra') ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">

    <?php if (!empty($estiloPagina)): ?>
        <link href="<?= htmlspecialchars($estiloPagina) ?>" rel="stylesheet">
    <?php endif; ?>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto"
                href="index.php?controller=index&action=index">
                <img src="Recursos/img/logo.png" alt="Logo UProgra">
            </a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Cerrar"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link <?= ($paginaActual ?? '') === 'index' ? 'active' : '' ?>"
                                href="index.php?controller=index&action=index">
                                Inicio
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 <?= ($paginaActual ?? '') === 'cursos' ? 'active' : '' ?>"
                                href="index.php?controller=cursos&action=index">
                                Cursos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 <?= ($paginaActual ?? '') === 'profesores' ? 'active' : '' ?>"
                                href="index.php?controller=profesores&action=index">
                                Profesores
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 <?= ($paginaActual ?? '') === 'contacto' ? 'active' : '' ?>"
                                href="index.php?controller=contacto&action=index">
                                Contacto
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <a href="#" class="login-button">Login</a>

            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>