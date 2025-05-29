<?php
include('../modelo/conexion.php');

$id = $_REQUEST['ide'];

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$ci = $_POST['ci'];

$query = "UPDATE `veterinario` SET `nombre` = '$nombre', `telefono` = '$telefono', `direccion` = '$direccion', `ci` = '$ci' 
          WHERE id_veterinario = '$id'";

$res = $conexion->query($query);

if ($res) {
    // Redireccionar 
    header("location:../vistas/listaVeterinario.php");
} else {
    echo "No se actualizó. Error al actualizar.";
}
?>
