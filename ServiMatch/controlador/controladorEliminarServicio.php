<?php require_once("../header/head.php"); ?>

<?Php
    include_once('../modelo/crud.php');
    $objeto = new crud();

    $idEliminar = $_GET['id'];
    $sentenciaEliminar = "DELETE FROM servicios WHERE idServicio = ?";
    $ideliminar = array(null,$idEliminar);
    $resultadoEliminar = $objeto->eliminar($sentenciaEliminar, $idEliminar);

    if($resultadoEliminar){
        echo '<script language="javascript">alert("Servicio eliminado exitosamente");
        window.location.href="../vista/administradorServicios.php"</script>';

        // echo '<script language="javascript">alert("servicio eliminado")</script>';
        // header('location:../../VISTA/ADMINISTRADOR/adm_servicios.php');
        
    }else{
        echo "Error al eliminar el servicio";
    }


?>