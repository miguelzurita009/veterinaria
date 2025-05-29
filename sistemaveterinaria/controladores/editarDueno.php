<?php
include('../modelo/conexion.php');


$id=$_REQUEST['ide'];

$nom = $_POST['nombre'];
$tel = $_POST['telefono'];
$dire = $_POST['direccion'];


$query="UPDATE `dueño` SET `nombre`='$nom',`telefono`='$tel',`direccion`='$dire' WHERE id_dueño='$id' ";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaDueno.php");
}else{

    echo"no se actualizo errrores al actualizar";
}

?>