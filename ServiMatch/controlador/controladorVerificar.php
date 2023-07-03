<?php
    session_start();

    require_once('../modelo/crud.php');
    $objeto = new crud();
    $cedula= $_POST['cedula'];
    $contraseñaFM = $_POST['contraseña'];

    if($_consulta2 = $objeto->consultarregistro("SELECT fkTiposUsuarios FROM usuarios WHERE cedula = ?", $cedula)){
        $_fkTiposUsuarios = $_consulta2->fkTiposUsuarios;
    }
    if($consulta = $objeto->consultarregistro("SELECT
                                        (select descripcion from tiposusuarios where idTiposUsuario = $_fkTiposUsuarios) as rol,
                                        contraseña, razonSocial, fkTiposUsuarios 
                                        FROM usuarios WHERE cedula= ?", $cedula)){
    $contraseñaBD = $consulta->contraseña;
    $tipoUsuario = $consulta->fkTiposUsuarios;

        if(($_POST['administrador']=="on")&& (password_verify($contraseñaFM, $contraseñaBD)) &&($tipoUsuario==1)){
            $_SESSION['usuario'] = $consulta->razonSocial;
            $_SESSION['rol'] = $consulta->rol;
            echo '<script language="javascript">alert("Iniciaste como administrador");
            window.location.href="/ServiMatch/vista/administradorUsuarios.php"</script>';
        
        }elseif(($_POST['administrador']!=="on") && (password_verify($contraseñaFM, $contraseñaBD)) &&($tipoUsuario==2)){
            $_SESSION['usuario'] = $_consulta2->razonSocial;
            $_SESSION['rol'] = $_consulta2->rol;
            echo '<script language="javascript">alert("Bienvenido");
            window.location.href="../vista/index.php"</script>';

        }elseif(($_POST['administrador']!=="on") && (password_verify($contraseñaFM, $contraseñaBD)) && (($tipoUsuario==3) || ($tipoUsuario==4))){
            $_SESSION['usuario'] = $_consulta2->razonSocial;
            $_SESSION['rol'] = $_consulta2->rol;
            echo '<script language="javascript">alert("Welcome");
            window.location.href="/ServiMatch/vista/prueba.php"</script>';

        }else{
            echo '<script language="javascript">alert("error de autenticacion");
            window.location.href="/ServiMatch/vista/inicioSecion.php"</script>';
        }
        
    }else{
        echo '<script language="javascript">alert("No existe ningun administrador con estos datos");
        window.location.href="/ServiMatch/vista/inicioSecion.php"</script>';
    } 

?>