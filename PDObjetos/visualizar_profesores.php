<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-4">
<h2 class="bg-dark text-white">Tabla Profesores</h2>
<?php
    include_once("profesores.php");
    $p = new Profesores();
    $profesores= $p->ListarP();
?>
<table class="table table-striped">
    <thead class="p-3 mb-2 bg-info text-white">
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>CATEGORIA</th>
            <th>INGRESO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($profesores as $profesor) {
            ?>
            <tr>
                <td><?php echo $profesor['dni'];?></td>
                <td><?php echo $profesor['nombre'];?></td>
                <td><?php echo $profesor['categoria'];?></td>
                <td><?php echo $profesor['ingreso'];?></td>
                <td>
                    <a href="modificar.php?dni=<?php echo $profesor['dni']; ?>&nombre=<?php echo $profesor['nombre']; ?>&categoria=<?php echo $profesor['categoria']; ?>&ingreso=<?php echo $profesor['ingreso']; ?>" class="btn btn-primary">Modificar</button>
                    <a href="borrar.php?dni=<?=$profesor['dni']?>" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    
    </tbody>
</table>
</body>
</html>