<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    echo '<script language="javascript">alert("Primero Debes Iniciar Sesión Para Acceder a esta Página");
            window.location.href="/ServiMatch/index.html"</script>';

    die();
}
require_once("../header/head.php");
require_once('../modelo/crud.php');
$objeto = new crud();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/ServiMatch/estilos/fondo.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="container p-4">
        <div class="card card-body border-dark">
            <h2 class="text-center">Formulario de Registro</h2><br>
            <form action="/ServiMatch/controlador/contralorInsertarDatos.php" method="POST">
                <!-- primera columna -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control border-dark" type="tel" name="usuario" placeholder="Cédula" require autofocus id="form-control"><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control border-dark" type="password" name="contraseña" placeholder="Contraseña" require id="form-control"><br>
                        </div>
                    </div>
                </div>
                <!-- segunda columna -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control border-dark" type="email" name="correo" placeholder="Correo" require id="form-control"> <br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control border-dark" type="text" name="razonSocial" placeholder="Razón Social" require id="form-control"><br>
                        </div>
                    </div>
                </div>
                <!-- tercera columna -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control border-dark" name="tipoUsuario" id="fkTiposUsuario">
                                <option value="0">Seleccione el Tipo de Usuario:</option>
                                <?php
                                require_once("../controlador/controladorConsultar.php");
                                foreach ($rstipoUsuario as $datos) {
                                ?>
                                    <option value="<?= $datos->idTiposUsuario ?>"><?= $datos->descripcion ?></option>
                                <?php
                                }
                                ?>
                            </select> <br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control border-dark" type="text" name="direccion" placeholder="Dirección" require id="form-control" id="form-control"> <br>
                        </div>
                    </div>
                </div>
                <!-- cuarta columna -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control border-dark" type="tel" name="telefono" placeholder="Teléfono" require id="form-control">
                        </div>
                    </div>
                </div> <br>
                <!-- quinta columna -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="text-center">¿Ya tienes una cuenta? <a href="../vista/inicioSecion.php" class="texto1">¡Inicia sesión aquí!!</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-gropu">
                            <p class="text-center"> <input type="radio" name="terminos"> Acepto los <a href="#">Terminos y Concidiones</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" name="insertarUsuarios" value="Registrarse" class="btn btn-sm btn-success btn-block form-control"> <br> <br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="reset" name="Cancelar" value="Cancelar" class="btn btn-sm btn-secondary btn-block form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row p-4">
            <div class="col-md-12">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th>CÉDULA</th>
                            <th>RAZÓN SOCIAL</th>
                            <th>DIRECCIÓN</th>
                            <th>TIPO DE USUARIO</th>
                            <th>CORREO</th>
                            <th>TELÉFONO</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <?php
                    include_once("../controlador/controladorConsultarUsuario.php");
                    if ($rsTipoUsuario) {
                        foreach ($rsTipoUsuario as $valores) {
                            echo "<tr>";
                            echo "<td>$valores->cedula</td>";
                            echo "<td>$valores->razonSocial</td>";
                            echo "<td>$valores->direccion</td>";
                            echo "<td>$valores->tiposUsuario</td>";
                            echo "<td>$valores->email</td>";
                            echo "<td>$valores->telefono</td>";
                            echo "<td><a href='editarUsuario.php?cedula=$valores->cedula'>Editar</a>
                                        <a href='../controlador/controladorEliminarUsuario.php?id=$valores->cedula'>Eliminar</a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>