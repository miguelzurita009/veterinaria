<?php
include('../modelo/conexion.php');

$nom = $_POST['nombre'];
$tel = $_POST['telefono'];
$dire = $_POST['direccion'];


$query = "INSERT INTO dueño(nombre, telefono, direccion) 
          VALUES ('$nom', '$tel', '$dire')";

$res = $conexion->query($query);

if ($res) {
    // Redirige a la vista
    header("Location: ../vistas/listaDueno.php");
} else {
    echo "No se pudo guardar el alumno.";
}
?>
