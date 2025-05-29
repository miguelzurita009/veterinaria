<?php
include('../modelo/conexion.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM `paciente` WHERE id_paciente='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaPacientes.php");
}else{

    echo"No se pudo eliminar";
}

?>
