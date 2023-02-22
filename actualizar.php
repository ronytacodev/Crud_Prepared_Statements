<?php
$mysqli = include_once "config/conexion.php";
$id = $_POST["id"];
$dni = $_POST["dni"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];

$sentencia = $mysqli->prepare("UPDATE colegio SET
dni = ?,
nombres = ?,
apellidos = ?
WHERE id = ?");
$sentencia->bind_param("issi", $dni, $nombres, $apellidos, $id);
$sentencia->execute();
header("Location: index.php");
