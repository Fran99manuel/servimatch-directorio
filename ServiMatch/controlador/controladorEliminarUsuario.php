<?php
    require_once('../modelo/crud.php');
    $objeto = new crud();
    $idEliminar = $_GET['id'];
    $sentenciaEliminar = "DELETE FROM usuarios WHERE cedula = ?";
    $ideliminar = array(null, $idEliminar);
    $resultadoEliminar = $objeto->eliminar($sentenciaEliminar, $idEliminar);

    if($resultadoEliminar){
        echo '<script language="javascript">alert("Usuario eliminado exitosamente")</script>';
        header('location:../vista/administradorUsuarios.php');
        
    }else{
        echo "Error al Eliminar el Usuarios";
    }
?>