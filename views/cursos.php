<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container py-5">

    <!-- Título -->
    <div class="text-center mb-5">
        <h1 class="fw-bold">Nuestros Cursos</h1>

        <p class="text-muted">
            Explora nuestra oferta académica y encuentra el curso ideal para desarrollar tus habilidades.
        </p>
    </div>

    <!-- Formulario para filtrar cursos -->
    <form method="GET" action="index.php" class="row justify-content-center mb-5">

        <input type="hidden" name="controller" value="cursos">
        <input type="hidden" name="action" value="index">

        <div class="col-md-5">

            <select
                name="categoria"
                class="form-select"
                onchange="this.form.submit()">

                <option value="">Todos los cursos</option>

                <?php foreach ($categorias as $cat): ?>

                    <option
                        value="<?= htmlspecialchars($cat) ?>"
                        <?= ($categoria == $cat) ? 'selected' : '' ?>>

                        <?= htmlspecialchars($cat) ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>

    </form>

    <!-- Tarjetas -->
    <div class="row g-4">

        <?php if (empty($cursos)): ?>

            <div class="col-12">

                <div class="alert alert-warning text-center">

                    No existen cursos para la categoría seleccionada.

                </div>

            </div>

        <?php else: ?>

            <?php foreach ($cursos as $curso): ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 shadow-sm">

                        <img
                            src="<?= htmlspecialchars($curso['imagen']) ?>"
                            class="card-img-top"
                            alt="<?= htmlspecialchars($curso['nombre']) ?>">

                        <div class="card-body d-flex flex-column">

                            <span class="badge bg-primary mb-2">

                                <?= htmlspecialchars($curso['categoria']) ?>

                            </span>

                            <h5 class="card-title">

                                <?= htmlspecialchars($curso['nombre']) ?>

                            </h5>

                            <p class="card-text">

                                <?= htmlspecialchars($curso['descripcion']) ?>

                            </p>

                            <ul class="list-group list-group-flush mb-3">

                                <li class="list-group-item">

                                    <strong>Duración:</strong>

                                    <?= htmlspecialchars($curso['duracion']) ?>

                                </li>

                                <li class="list-group-item">

                                    <strong>Precio:</strong>

                                    ₡<?= number_format($curso['precio'], 2) ?>

                                </li>

                            </ul>

                            <a href="#"
                               class="btn btn-primary mt-auto">

                                Más información

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>

</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>