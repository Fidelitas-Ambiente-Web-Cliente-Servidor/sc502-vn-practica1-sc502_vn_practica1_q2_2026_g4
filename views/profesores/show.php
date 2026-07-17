<?php

$pageTitle = 'Detalle del Profesor';
$depth = 0;
require __DIR__ . '/../layout/header.php';

?>


<div class="mb-4">


    <a
    href="index.php?controller=profesores&action=index"
    class="btn btn-secondary">

        <i class="bi bi-arrow-left me-1"></i>

        Regresar

    </a>


</div>



<div class="row justify-content-center">


    <div class="col-lg-7">


        <div class="card shadow">


            <div class="card-body text-center">


                <img
                src="images/<?= htmlspecialchars($profesor['foto']) ?>"
                class="img-fluid rounded mb-4"
                alt="<?= htmlspecialchars($profesor['nombre']) ?>"
                style="max-height:350px;">



                <h2>

                    <?= htmlspecialchars($profesor['nombre']) ?>

                </h2>



                <h4 class="text-primary">

                    <?= htmlspecialchars($profesor['especialidad']) ?>

                </h4>



                <p>

                    <?= htmlspecialchars($profesor['descripcion']) ?>

                </p>



                <hr>



                <p>

                    <strong>
                        <i class="bi bi-envelope me-1"></i>
                        Correo:
                    </strong>

                    <?= htmlspecialchars($profesor['correo']) ?>

                </p>



                <p>

                    <strong>
                        <i class="bi bi-book me-1"></i>
                        Cursos:
                    </strong>

                    <?= htmlspecialchars($profesor['cursos']) ?>

                </p>



            </div>


        </div>


    </div>


</div>



<?php require __DIR__ . '/../layout/footer.php'; ?>