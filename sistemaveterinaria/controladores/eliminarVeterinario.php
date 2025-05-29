<?php
include('../modelo/conexion.php');

$id = $_REQUEST['ide'];

$query = "DELETE FROM `veterinario` WHERE id_veterinario = '$id'";

$res = $conexion->query($query);

if ($res) {
    // Redireccionando la vista
    header("location:../vistas/listaVeterinario.php");
} else {
    echo "No se pudo eliminar";
}
?>
