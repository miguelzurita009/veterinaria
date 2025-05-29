<?php
include('../modelo/conexion.php');

$nombre = $_POST['nombre'];
$ci = $_POST['ci'];
$tel = $_POST['telefono'];
$dire = $_POST['direccion'];


$query = "INSERT INTO `veterinario`(`nombre`, `telefono`, `direccion`, `ci`) 
          VALUES ('$nombre', '$tel', '$dire', '$ci')";

$res = $conexion->query($query);

if ($res) {
    // Redirige a la vista
    header("Location: ../vistas/listaVeterinario.php");
} else {
    echo "No se pudo guardar el profesor.";
}
?>
