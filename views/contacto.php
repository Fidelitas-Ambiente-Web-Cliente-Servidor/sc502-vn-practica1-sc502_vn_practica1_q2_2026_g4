<?php
// Cargar el layout del header
require_once __DIR__ . '/layout/header.php';
?>

<main>
    <header class="encabezado">
        <h1>Contacto</h1>
        <p>Página de contacto para consultas y matrículas.</p>
    </header>

    <section class="container my-5">
        <div class="row g-4">
            <div class="col-lg-7 col-md-12">
                <div class="formulario-seccion card-custom">
                    <h2>Formulario de Contacto</h2>

                    <!-- Alerta de exito en server -->
                    <?php if (!empty($exito)): ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            <div>
                                Mensaje enviado y registrado con éxito
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Alerta de error en server -->
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <i class="fa-solid fa-circle-exclamation me-2"></i>
                            <div>
                                <?= htmlspecialchars($error) ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form action="index.php?controller=contacto&action=store" method="POST" id="form-contacto">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>" required>
                            <span id="error-nombre" class="mensaje-error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                            <span id="error-email" class="mensaje-error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" name="telefono"
                                value="<?= htmlspecialchars($_POST['telefono'] ?? '') ?>" required>
                            <span id="error-telefono" class="mensaje-error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="asunto" name="asunto"
                                value="<?= htmlspecialchars($_POST['asunto'] ?? '') ?>" required>
                            <span id="error-asunto" class="mensaje-error"></span>
                        </div>

                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5"
                                required><?= htmlspecialchars($_POST['mensaje'] ?? '') ?></textarea>
                            <span id="error-mensaje" class="mensaje-error"></span>
                        </div>

                        <button type="submit" class="btn-submit">Enviar Mensaje</button>
                        <div id="mensaje-exito" class="alerta-exito"></div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="info-seccion card-custom">
                    <h2>Datos de contacto</h2>
                    <p>
                        <i class="fa-solid fa-location-dot me-2 text-color-accent"></i>
                        <strong>Dirección:</strong><br>
                        150 metros oeste de la Rotonda de la Bandera, San Pedro, San José, Costa Rica
                    </p>
                    <p class="mt-3">
                        <i class="fa-solid fa-phone me-2 text-color-accent"></i>
                        <strong>Teléfono:</strong><br>
                        8888-4444
                    </p>
                    <p class="mt-3">
                        <i class="fa-solid fa-envelope me-2 text-color-accent"></i>
                        <strong>Correo electrónico:</strong><br>
                        contacto@universidad.ac.cr
                    </p>
                </div>

                <div class="mapa-seccion card-custom">
                    <h2>Ubicación</h2>
                    <div class="ratio ratio-4x3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d474.9958304537762!2d-84.05325166837632!3d9.939490818931827!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2scr!4v1780507958790!5m2!1ses!2scr"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="Mapa de Ubicación"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

require_once __DIR__ . '/layout/footer.php';
?>