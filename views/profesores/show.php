<section class="container my-5">

    <a
        href="index.php?controller=profesores&action=index"
        class="btn btn-secondary mb-4">

        ← Regresar

    </a>

    <div class="card shadow">

        <div class="card-body text-center">

            <img
                src="images/<?php echo $profesor['foto'];?>"
                class="img-fluid mb-4"
                style="max-height:350px;">

            <h2>

                <?php echo $profesor['nombre'];?>

            </h2>

            <h4>

                <?php echo $profesor['especialidad'];?>

            </h4>

            <p>

                <?php echo $profesor['descripcion'];?>

            </p>

            <hr>

            <p>

                <strong>Correo:</strong>

                <?php echo $profesor['correo'];?>

            </p>

            <p>

                <strong>Cursos:</strong>

                <?php echo $profesor['cursos'];?>

            </p>

        </div>

    </div>

</section>