<?php
include('../modelo/conexion.php');


$id=$_REQUEST['ide'];

$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$raza = $_POST['raza'];
$fecha_nac = $_POST['fecha_nac'];
$id_dueño = $_POST['dueño'];


$query="UPDATE `paciente` SET `nombre`='$nombre',`especie`='$especie',`raza`='$raza',`fecha_nac`='$fecha_nac',`id_dueño`='$id_dueño' WHERE id_paciente='$id' ";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaPacientes.php");
}else{

    echo"no se actualizo errrores al actualizar";
}

?>