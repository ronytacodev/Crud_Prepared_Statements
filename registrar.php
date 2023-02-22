<?php
$mysqli = include_once "config/conexion.php";
$id = $_POST['id'];
$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$sentencia = $mysqli->prepare("INSERT INTO colegio
(id, dni, nombres, apellidos)
VALUES
(?, ?, ?, ?)");
$sentencia->bind_param("iiss", $id, $dni, $nombres, $apellidos);
$sentencia->execute();
header("Location: index.php");
