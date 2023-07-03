<?php
    if(isset($_POST['editarUsuarios'])){

        include_once('../modelo/crud.php');
        $objeto = new crud();
    
        $cedulaUsuarios = $_POST['usuario'];
        $razonSocial = $_POST['razonSocial'];
        $tipoUsuarioNuevo = $_POST['tipoUsuario'];
        $correoNuevo = $_POST['correo'];
        $telefonoNuevo = $_POST['telefono'];
        $direccionNueva = $_POST['direccion'];
    
        $senteciaEditar = "UPDATE usuarios SET razonSocial = ?, direccion = ?, fkTiposUsuarios= ? WHERE cedula =?";
        $valoresEditarr = array($cedulaUsuarios, $razonSocial, $tipoUsuarioNuevo, $direccionNueva);
        $resultadoEditar = $objeto->editar($senteciaEditar, $valoresEditarr);
    
        $senteciaEditar = "UPDATE telefonos SET numero = ? WHERE fkUsuarios =?";
        $valoresEditarr = array($telefonoNuevo, $cedulaUsuarios);
        $resultadoEditar = $objeto->editar($senteciaEditar, $valoresEditarr);
    
        $senteciaEditar = "UPDATE email SET correo = ? WHERE fkUsuarios =?";
        $valoresEditarr = array($correoNuevo, $cedulaUsuarios);
        $resultadoEditar = $objeto->editar($senteciaEditar, $valoresEditarr);
    
        if(!$resultadoEditar){
            echo '<script language="javascript">alert("Ocurrio un error al actualizar el usuario");
            window.location.href="/ServiMatch/vista/administradorUsuarios.php"</script>' ;
        }else{
            echo '<script language="javascript">alert("Usuario editado exitosamente");
            window.location.href="/ServiMatch/vista/administradorUsuarios.php"</script>'; 
        }
    }elseif(isset($_POST['editarCategoria'])){

        require_once('../modelo/crud.php');
        $objeto = new crud();
    
        $idCategoria = ($_POST['id']);
        $categoria = ($_POST['categoria']);
    
        $sentenciaEditar = "UPDATE categorias SET tipo=? WHERE idCategoria= ?";
        $valorEditar = array($categoria, $idCategoria);
        $resultadoEditar = $objeto->editar($sentenciaEditar, $valorEditar);
    
        if(!$resultadoEditar){
            echo "Ocurrio un error al Actualizar el Tipo de Categoría";
        }else{
            echo '<script language="javascript">alert("Categoria actualizada exitosamente");
            window.location.href="/ServiMatch/vista/administradorCategoria.php"</script>';
        }
    }elseif(isset($_POST['editarServicios'])){

        include_once('../modelo/crud.php');
        $objeto = new crud();

        $idServicio = $_POST['id'];
        $nameNombreServicio = $_POST['Servicio'];
        $descripcionNueva = $_POST['descripcion'];
        $categoriaNueva= $_POST['categoria'];

        $senteciaEditar = "UPDATE servicios SET nombre= ?, descripcion=?, fkCategoria= ? WHERE idServicio = ?";
        $valoresEditar = array($nameNombreServicio, $descripcionNueva,$categoriaNueva, $idServicio );
        $rsEditar = $objeto->editar($senteciaEditar, $valoresEditar);

        if(!$rsEditar){
            echo '<script language="javascript">alert("ocurrio un error al actualizar");
            window.location.href="/ServiMatch/vista/administradorServicios.php"</script>' ;
        }else{
            echo '<script language="javascript">alert("Servicio actualizado exitosamente");
            window.location.href="/ServiMatch/vista/administradorServicios.php"</script>'; 
        }
    }elseif(isset($_POST['editarTiposUsuarios'])){
        
        include_once('../modelo/crud.php');
        $objeto = new crud();
    
        $idTiposUsuarios = $_POST['id'];
        $tipoUsuarioNuevo = $_POST['tipoUsuarioNuevo'];
    
        $sentenciaEditar = "UPDATE tiposusuarios SET descripcion =? WHERE idTiposUsuario = ?";
        $valoresEditar = array($tipoUsuarioNuevo, $idTiposUsuarios);
        $rsEditar = $objeto->editar($sentenciaEditar, $valoresEditar);
    
        if(!$rsEditar){
            echo '<script language="javascript">alert("Ocurrio un error al editar el tipo de usuario");
            window.location.href="/ServiMatch/vista/administradorEditarTipoUsuario.php"</script>' ;
        }else{
            echo '<script language="javascript">alert("El tipo de usuario fue actualizado exitosamente");
            window.location.href="/ServiMatch/vista/administradorTipoUsuario.php"</script>';
        }
    }

?>