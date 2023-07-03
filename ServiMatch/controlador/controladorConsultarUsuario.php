<?php
    include_once('../modelo/crud.php');
    $objeto = new crud();
    $rsTipoUsuario = $objeto->consultarTiposUsuarios("SELECT cedula, razonSocial, direccion,
    (select descripcion from tiposusuarios where idTiposUsuario = fkTiposUsuarios) as tiposUsuario,
    (select numero from telefonos where fkUsuarios = cedula ) as telefono,
    (select correo from email where fkUsuarios = cedula) as email
    from usuarios;");
    
    

?>