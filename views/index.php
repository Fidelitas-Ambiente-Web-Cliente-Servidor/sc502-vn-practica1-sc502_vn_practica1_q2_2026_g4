<?php require_once __DIR__ . '/layout/header.php'; ?>

<main>
    <section class="hero_container">
        <div class="hero_content">
            <h1>Aprende Programación con UProgra</h1>

            <p>
                Convierte tu pasión por la tecnología en una habilidad profesional
                mediante cursos prácticos impartidos por expertos.
            </p>

            <a href="#" class="hero_button">
                Comenzar Ahora
            </a>
        </div>
    </section>

    <section class="about_container">
        <div class="container">
            <div class="about_content">
                <h2>¿Qué es UProgra?</h2>

                <p>
                    UProgra es una plataforma educativa enfocada en la enseñanza
                    de programación y tecnologías modernas. Nuestro objetivo es
                    brindar cursos prácticos impartidos por profesionales para que
                    cualquier persona pueda desarrollar habilidades tecnológicas.
                </p>

                <div class="about_stats">
                    <div class="stat">
                        <h3>+5000</h3>
                        <p>Estudiantes</p>
                    </div>

                    <div class="stat">
                        <h3>+20</h3>
                        <p>Cursos</p>
                    </div>

                    <div class="stat">
                        <h3>+50</h3>
                        <p>Profesores</p>
                    </div>

                    <div class="stat">
                        <h3>95%</h3>
                        <p>Satisfacción</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="card_container" id="cursosDestacados">
        <div class="container">
            <h3 class="title-cards">Cursos Destacados</h3>
        </div>

        <?php foreach ($cursosDestacados as $curso): ?>
            <div class="card"
                data-categoria="<?= htmlspecialchars($curso['categoria']) ?>">

                <?php if (!empty($curso['imagen'])): ?>
                    <img src="<?= htmlspecialchars($curso['imagen']) ?>"
                        alt="<?= htmlspecialchars($curso['nombre']) ?>">
                <?php endif; ?>

                <div class="content">
                    <h3><?= htmlspecialchars($curso['nombre']) ?></h3>

                    <p><?= htmlspecialchars($curso['descripcion']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="comment_container" id="testimoniosEstudiantes">
        <div class="container">
            <h3 class="title-cards">Testimonios de Estudiantes</h3>
        </div>

        <?php foreach ($testimonios as $testimonio): ?>
            <div class="comment_card">
                <div class="header">
                    <a href="#">
                        <?php if (!empty($testimonio['imagen'])): ?>
                            <img src="<?= htmlspecialchars($testimonio['imagen']) ?>"
                                alt="<?= htmlspecialchars($testimonio['nombre']) ?>">
                        <?php endif; ?>
                    </a>

                    <ul>
                        <li>
                            <h6>
                                <strong>
                                    <?= htmlspecialchars($testimonio['nombre']) ?>
                                </strong>
                            </h6>
                        </li>

                        <li>
                            <p><?= htmlspecialchars($testimonio['ubicacion']) ?></p>
                        </li>
                    </ul>
                </div>

                <div class="description">
                    <p><?= htmlspecialchars($testimonio['comentario']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once __DIR__ . '/layout/footer.php'; ?>