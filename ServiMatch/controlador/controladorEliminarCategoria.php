<?php
    require_once('../modelo/crud.php');
    $objeto = new crud();
    $idEliminar = $_GET['id'];
    $sentenciaEliminar = "DELETE FROM categorias WHERE idCategoria = $idEliminar";
    // $idEliminar = $_GET['id'];
    $resultadoEliminar = $objeto->eliminar($sentenciaEliminar, $idEliminar);

    if($resultadoEliminar){
        echo '<script language="javascript">alert("Categoria eliminada Exitosamente");
        window.location.href="/ServiMatch/vista/administradorCategoria.php"</script>';
       
    }else{
        echo '<script language="javascript">alert("Error al eliminar la Categoria");
        window.location.href="/ServiMatch/vista/administradorCategoria.php"</script>';
    }


?>