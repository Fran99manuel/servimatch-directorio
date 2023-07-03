<?php require_once("../header/head.php"); ?>
<?php 
    include_once('../modelo/crud.php');
    $objeto = new crud();
    $rstipoUsuario = $objeto->consultarTiposUsuarios("SELECT * FROM tiposusuarios");
?>