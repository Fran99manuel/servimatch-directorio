<?php
    if (isset($_POST['insertarUsuarios'])){

        require_once('../modelo/crud.php');
        $objeto = new crud();

        $cedula = $_POST['usuario'];
        $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
        $razonSocial =$_POST['razonSocial'];
        $direccion= $_POST['direccion'];
        $tipoU = $_POST['tipoUsuario'];
        $correo = $_POST['correo'];
        $telefono= $_POST['telefono'];
        
        $rsTipoUsuario = $objeto->consultarregistro("SELECT cedula FROM usuarios WHERE cedula = ?", $cedula);
        if($rsTipoUsuario){
            echo '<script language="javascript"> alert("Usuario insertado exitosamente");
            window.location.href="/ServiMatch/vista/administradorUsuarios.php"</script>';

        }else{
            $rsinsertar= "INSERT INTO usuarios VALUES(?,?,?,?,?)";
            $valores = array($cedula, $contraseña, $razonSocial, $direccion, $tipoU);
            $rsUsuarios = $objeto->insertarDatos($rsinsertar, $valores);

            $rsinsertar = "INSERT INTO email VALUES (?,?,?)";
            $valores = array(null, $cedula, $correo);
            $rsUsuarios = $objeto->insertarDatos($rsinsertar, $valores);

            $rsinsertar ="INSERT INTO telefonos VALUES (?,?,?)";
            $valores = array(null, $cedula, $telefono);
            $rsUsuarios = $objeto->insertarDatos($rsinsertar, $valores);

            if($rsUsuarios){
                echo '<script language="javascript">alert("Usuario insertado exitosamente");
                window.location.href="/ServiMatch/vista/administradorUsuarios.php"</script>';
                
            }else{
                echo 'Ocurrio un Error al Insertar el usuario';
            }
        }
    }elseif(isset($_POST['insertarCategoria'])){

        require_once('../modelo/crud.php');
        $objeto = new crud();
        $tipo = $_POST ['categoria'];
    
        $insertarCategoria = $objeto->consultarregistro("SELECT tipo FROM categorias WHERE tipo = ?", $tipo);
    
        if($insertarCategoria){
            echo '<script language="javascript">alert("La Categoria que inserto ya existe");
            window.location.href="../vista/administrador.php"</script>';
        }else{
            $sentenciacategoria= "INSERT INTO categorias VALUES(?,?)";
            $valores = array(null, $tipo);
            $rscategoria = $objeto->insertarDatos($sentenciacategoria, $valores);
    
            if($rscategoria){
                echo '<script lenguage="javascript"> alert("Categoria insertada exitosamente");
                window.location.href="/ServiMatch/vista/administradorCategoria.php"</script>';
                
            }else{
                echo 'Ocurrio un error al insertar la Categoria';
            }
        }
    }elseif(isset($_POST['insertarServicios'])){

        include_once('../modelo/crud.php');
        $objeto = new crud();
    
        $nameServicio = $_POST['servicio'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        
        $verificarServicio = $objeto->consultarregistro("SELECT nombre FROM servicios WHERE nombre = ?", $nameServicio);
        if($verificarServicio){
                echo '<script language="javascript">alert("servicio existente porfavor verfica");
                window.location.href="/ServiMatch/vista/administradorServicios.php"</script>';
            }else{
            $sentenciaInsertar = "INSERT INTO servicios VALUES(?,?,?,?)";
            $valores = array (null, $nameServicio, $descripcion, $categoria );
            $resultadoInsertar = $objeto->insertarDatos($sentenciaInsertar, $valores);
            
            if($resultadoInsertar){
                echo '<script language="javascript">alert("Servicio insertado exitosamente");
                window.location.href="/ServiMatch/vista/administradorServicios.php"</script>';
            }else{
                echo "Ocurrió un error al insertar el usuario.";
            }
        }
    }elseif(isset($_POST['insertarTiposUsuarios'])){
        
        include_once('../modelo/crud.php');
        $objeto = new crud();
        $tipoUsuario = $_POST['tipoUsuarioNuevo'];
    
        $verficarTipoUsuario = $objeto->consultarregistro("SELECT descripcion FROM tiposusuarios WHERE descripcion = ?", $tipoUsuario);
        if($verficarTipoUsuario){
            echo '<script language="javascript">alert("tipo de usuario  existente porfavor verfica");
            window.location.href="../vista/administradorTipoUsuario.php"</script>';
        }else{
            $sentenciaTiposUsuarios ="INSERT INTO tiposusuarios VALUES (?,?)";
            $valores = array(null, $tipoUsuario);
            $rsTipoUsuario =$objeto->insertarDatos($sentenciaTiposUsuarios, $valores);
        
            if($rsTipoUsuario){
                echo '<script language="javascript">alert("Tipo de usuario insertado exitosamente");
                window.location.href="../vista/administradorTipoUsuario.php"</script>';
                
            }else{
                echo "Ocurrió un Error al Insertar el Tipo de Usuario.";
            }
        }  
    }
?>
