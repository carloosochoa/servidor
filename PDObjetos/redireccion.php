<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tabla'])) {
        $tabla_elegida = $_POST['tabla'];

        switch ($tabla_elegida) {
            case 'profesores':
                header("Location: visualizar_profesores.php");
                break;
            case 'asignaturas':
                header("Location: visualizar_asignaturas.php");
                break;
            case 'imparte':
                header("Location: visualizar_imparte.php");
                break;
            default:
                echo "Selección no válida";
                break;
        }
    }
}
?>
