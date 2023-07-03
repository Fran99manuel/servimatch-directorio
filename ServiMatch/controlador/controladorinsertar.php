<?php
require_once('../modelo/crud.php');
$objeto = new crud();
$cedula = $_POST['usuario'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
$razonSocial =$_POST['razonSocial'];
$direccion= $_POST['direccion'];
$tipoU = $_POST['tipoUsuario'];
$correo = $_POST['correo'];
$telefono= $_POST['telefono'];

$verificarUsuario = $objeto->consultarregistro("SELECT cedula FROM usuarios WHERE cedula = ?", $cedula);
if($verificarUsuario){
    echo '<script language="javascript">alert("BIENVENIDO");
    window.location.href="../vista/registro.php"</script>';
}else{
    $sentenciaInsertar = "INSERT INTO usuarios VALUES(?,?,?,?,?)";
    $valores = array($cedula, $contraseña, $razonSocial, $direccion, $tipoU);
    $resultadoInsertar = $objeto->insertarDatos($sentenciaInsertar, $valores);

    $sentenciaInsertar = "INSERT INTO telefonos VALUES(?,?,?)";
    $valores = array( null, $cedula, $telefono);
    $resultadoInsertar = $objeto->insertarDatos($sentenciaInsertar, $valores);

    $sentenciaInsertar = "INSERT INTO email VALUES(?,?,?)";
    $valores = array(null, $cedula, $correo);
    $resultadoInsertar = $objeto->insertarDatos($sentenciaInsertar, $valores);

    if($resultadoInsertar){
        echo '<script language="javascript">alert("Registro insertado");
        window.location.href="../vista/registro.php"</script>';
        // header("location: ../vista/registro.php");
    }else{
        echo "Ocurrió un error al insertar el usuario.";
    }


}

