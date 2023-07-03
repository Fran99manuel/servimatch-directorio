<?php require_once("../header/head.php"); ?>
<?php 
    include_once('../modelo/crud.php');
    $objeto = new crud();


    $rsServicios = $objeto->consultarTiposUsuarios("SELECT idServicio, nombre, descripcion,
    (SELECT tipo FROM categorias WHERE idCategoria = fkCategoria) as tipo
    FROM servicios;");
?>