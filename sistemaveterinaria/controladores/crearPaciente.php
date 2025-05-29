<?php
include('../modelo/conexion.php');

$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$fecha_nac = $_POST['fecha_nac'];
$id_dueño = $_POST['dueño'];

$query = "INSERT INTO `paciente`(`nombre`, `especie`, `raza`, `fecha_nac`, `id_dueño`) 
          VALUES ('$nombre', '$especie', '$raza', '$fecha_nac', '$id_dueño')";

$res = $conexion->query($query);

if ($res) {
    // Redirige a la vista
    header("Location: ../vistas/listaPacientes.php");
} else {
    echo "No se pudo guardar el curso.";
}
?>
