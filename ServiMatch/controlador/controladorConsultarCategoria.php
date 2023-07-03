<?php
    include_once('../modelo/crud.php');
    $objeto = new crud();
    $rscategoria = $objeto->consultarTiposUsuarios("SELECT * FROM categorias");

?>