    <footer>
        <div class="container">
            <ul class="d-flex flex-row">
                <li><a href="#">Texto 1</a></li>
                <li><a href="#">Texto 2</a></li>
                <li><a href="#">Texto 3</a></li>
                <li><a href="#">Texto 4</a></li>
            </ul>

            <ul class="d-flex flex-row">
                <li><i class="fab fa-youtube"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-facebook"></i></li>
            </ul>

            <p>&copy; <?= date('Y') ?> UProgra SA</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <?php if (!empty($scriptPagina)): ?>
        <script src="<?= htmlspecialchars($scriptPagina) ?>"></script>
    <?php endif; ?>
</body>

</html>