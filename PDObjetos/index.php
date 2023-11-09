<?php include "cabecera.inc";
require_once "profesores.php"?>

<h2>¿Qué tabla deseas visualizar?</h2>
    <form action="redireccion.php" method="post" class="mt-3">
        <div class="form-group">
            <div class="form-check">
                <input type="radio" name="tabla" value="profesores" id="profesores" class="form-check-input">
                <label for="profesores" class="form-check-label">Profesores</label>
            </div>
            <div class="form-check">
                <input type="radio" name="tabla" value="asignaturas" id="asignaturas" class="form-check-input">
                <label for="asignaturas" class="form-check-label">Asignaturas</label>
            </div>
            <div class="form-check">
                <input type="radio" name="tabla" value="imparte" id="imparte" class="form-check-input">
                <label for="imparte" class="form-check-label">Imparte</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Ver tabla</button>
    </form>

    <!-- Enlace al archivo JS de Bootstrap (opcional, para ciertas funcionalidades) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





<?php include "pie.inc";?>