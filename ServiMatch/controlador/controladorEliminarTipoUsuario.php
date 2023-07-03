<?php require_once("../header/head.php"); ?>
<?php 
    include_once('../modelo/crud.php');
    $objeto = new crud();

    $idEliminar = $_GET['id'];
    $sentenciaEliminar = "DELETE FROM tiposusuarios WHERE idTiposUsuario = ?";
    $ideliminar = array(null,$idEliminar);
    $resultadoEliminar = $objeto->eliminar($sentenciaEliminar, $idEliminar);

    if($resultadoEliminar){
        echo '<script language="javascript">alert("Tipo de usuario eliminado exitosamente");
        window.location.href="../vista/administradorTipoUsuario.php"</script>';
        
    }else{
        echo "Error al Eliminar el Tipo de Usuario";
    }
?>