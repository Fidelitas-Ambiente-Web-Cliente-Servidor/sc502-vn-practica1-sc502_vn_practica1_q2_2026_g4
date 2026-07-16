<section class="container my-5">

    <div class="row g-4">

        <?php foreach($profesores as $profesor){ ?>

            <div class="col-md-6 col-lg-3">

                <div class="profesor-card">

                    <img
                        src="images/<?php echo $profesor['foto'];?>"
                        class="img-fluid"
                        alt="<?php echo $profesor['nombre'];?>">

                    <h3>

                        <?php echo $profesor['nombre'];?>

                    </h3>

                    <h5>

                        <?php echo $profesor['especialidad'];?>

                    </h5>

                    <p>

                        <?php echo $profesor['descripcion'];?>

                    </p>

                    <a
                    href="index.php?controller=profesores&action=show&id=<?php echo $profesor['id'];?>"
                    class="btn btn-primary">

                        Ver más

                    </a>

                </div>

            </div>

        <?php } ?>

    </div>

</section>