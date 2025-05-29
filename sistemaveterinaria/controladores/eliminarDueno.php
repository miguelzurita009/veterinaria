<?php
include('../modelo/conexion.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM `dueño` WHERE id_dueño='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaDueno.php");
}else{

    echo"No se pudo eliminar";
}

?>
