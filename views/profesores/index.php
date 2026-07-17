<?php

$pageTitle = 'Listado de Profesores';
$depth = 0;
require __DIR__ . '/../layout/header.php';

?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>
        <i class="bi bi-person-badge me-2"></i>
        Profesores
    </h2>

</div>


<?php if (empty($profesores)): ?>

    <div class="alert alert-info">

        <i class="bi bi-info-circle me-2"></i>

        No hay profesores registrados.

    </div>


<?php else: ?>


<div class="row g-4">


    <?php foreach ($profesores as $profesor): ?>


        <div class="col-md-6 col-lg-3">


            <div class="card shadow h-100">


                <img
                    src="images/<?= htmlspecialchars($profesor['foto']) ?>"
                    class="card-img-top"
                    alt="<?= htmlspecialchars($profesor['nombre']) ?>"
                    style="height:250px; object-fit:cover;">


                <div class="card-body">


                    <h3 class="card-title">

                        <?= htmlspecialchars($profesor['nombre']) ?>

                    </h3>


                    <h5 class="text-primary">

                        <?= htmlspecialchars($profesor['especialidad']) ?>

                    </h5>


                    <p class="card-text">

                        <?= htmlspecialchars($profesor['descripcion']) ?>

                    </p>



                    <a
                    href="index.php?controller=profesores&action=show&id=<?= $profesor['id'] ?>"
                    class="btn btn-primary">

                        <i class="bi bi-eye me-1"></i>

                        Ver más

                    </a>


                </div>


            </div>


        </div>


    <?php endforeach; ?>


</div>


<p class="text-muted mt-4">

    Total: <?= count($profesores) ?> profesor(es) registrado(s).

</p>


<?php endif; ?>


<?php require __DIR__ . '/../layout/footer.php'; ?>