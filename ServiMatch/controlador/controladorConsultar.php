<?php
    include_once('../modelo/crud.php');
    $objto = new crud();
    $rstipoUsuario = $objto->consultarTiposUsuarios("SELECT * FROM tiposusuarios");


?>