<?php
include('../modelo/conexion.php');


$fecha = $_POST['fecha_consulta'];
$diag = $_POST['diagnostico'];
$trat = $_POST['tratamiento'];
$id_pac = $_POST['id_paciente'];
$id_vet = $_POST['id_veterinario'];


$id = $_REQUEST['ide'];


$query = "UPDATE consulta SET fecha_consulta = '$fecha',diagnostico = '$diag',tratamiento = '$trat',id_paciente = '$id_pac', id_veterinario = '$id_vet'
          WHERE id_consulta = '$id'";

$res = $conexion->query($query);

if ($res) {
    header("Location: ../vistas/listaConsulta.php");
} else {
    echo "No se pudo actualizar la consulta.";
}
?>
