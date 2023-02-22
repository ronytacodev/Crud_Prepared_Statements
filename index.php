<?php
include_once "template/encabezado.php";

$mysqli = include_once "config/conexion.php";
$resultado = $mysqli->query("SELECT id, dni, nombres, apellidos FROM colegio");
$colegio = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-12 text-center bg-success bg-opacity-50">
        <h1 class="text-dark font-monospace">
            <img src="./img/logoColegio.png" width="40" height="40">
            Institución Educativa "Albert Einstein"
        </h1>
    </div>

    <div class="col-12">
        <hr>
    </div>

    <div class="col-md-3">
        <h1>Ingrese datos</h1>
        <hr>
        <form action="registrar.php" method="POST">
            <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Código Estudiante">
            <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
            <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
            <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">

            <input type="submit" class="btn btn-primary" value="Agregar">
        </form>
    </div>

    <div class="col-md-1">

    </div>

    <div class="col-8">
        <table class="table table-hover">
            <thead class="table-primary table-striped">
                <tr>
                    <th>Código</th>
                    <th>Dni</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($colegio as $alumno) { ?>
                    <tr>
                        <td><?php echo $alumno["id"] ?></td>
                        <td><?php echo $alumno["dni"] ?></td>
                        <td><?php echo $alumno["nombres"] ?></td>
                        <td><?php echo $alumno["apellidos"] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $alumno["id"] ?>" class="btn btn-info">Editar</a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $alumno["id"] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "template/pie.php" ?>