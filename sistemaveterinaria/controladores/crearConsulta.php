<?php
include('../modelo/conexion.php');

$id_paciente = $_POST['paciente'];
$id_vete = $_POST['veterinario'];
$fech = $_POST['fecha_consulta'];
$diag = $_POST['diagnostico'];
$trat = $_POST['tratamiento'];


$query = "INSERT INTO `consulta`(`fecha_consulta`, `diagnostico`, `tratamiento`, `id_paciente`, `id_veterinario`) 
          VALUES ('$fech', '$diag', '$trat', '$id_paciente', '$id_vete')";

$res = $conexion->query($query);

if ($res) {
    // Redirige a la vista
    header("Location: ../vistas/listaConsulta.php");
} else {
    echo "No se pudo guardar la consulta.";
}
?>
