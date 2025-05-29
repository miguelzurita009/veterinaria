<?php
include('../modelo/conexion.php');

$id = $_REQUEST['ide'];

$query = "DELETE FROM `consulta` WHERE id_consulta = '$id'";
$res = $conexion->query($query);

if ($res) {
    // Redireccionar a la lista de consultas
    header("location:../vistas/listaConsulta.php");
} else {
    echo "No se pudo eliminar la consulta";
}
?>
