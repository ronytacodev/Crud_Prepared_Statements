<?php
include_once "template/encabezado.php";

$mysqli = include_once "config/conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, dni, nombres, apellidos FROM colegio WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
# Obtenemos solo una fila, que será el videojuego a editar
$alumno = $resultado->fetch_assoc();
if (!$alumno) {
    exit("No hay resultados para ese ID");
}

?>

<!-- INICIO LANDING PAGE ACTUALIZAR -->
<div class="row">
    <div class="col-12 text-center bg-success bg-opacity-50">
        <h1 class="text-dark font-monospace">
            <img src="./img/logoColegio.png" width="40" height="40">
            Institución Educativa "Albert Einstein"
        </h1>
    </div>

    <div class="container mt-5">
        <form action="actualizar.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $alumno['id'] ?>">

            <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $alumno['dni'] ?>">
            <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $alumno['nombres'] ?>">
            <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $alumno['apellidos'] ?>">

            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            <a class="btn btn-warning" href="index.php">Volver</a>
        </form>
    </div>

    <!-- FIN LANDING PAGE ACTUALIZAR -->

    <?php include_once "template/pie.php"; ?>