<?php require_once("../header/head.php"); ?>

<?php
include('../modelo/conexion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ServiMatch/estilos/styles.css">
    <title>Registrarse</title>
</head>

<body>

    <!-- registro del usuario -->

    <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <form class="" action="../controlador/controladorinsertar.php" method="POST">

                <h3 class="text-center">Registro del Usuario</h3>

                <input class="form-control" type="tel" name="usuario" placeholder="Cédula" require autofocus><br>
                <input class="form-control" type="password" name="contraseña" placeholder="Contraseña" require><br>

                <input class="form-control" type="email" name="correo" placeholder="Correo" require> <br>
                <input class="form-control" type="text" name="razonSocial" placeholder="Razón Social" require><br>

                <select class="form-control" name="tipoUsuario" id="fkTiposUsuario">
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
                <input class="form-control" type="text" name="direccion" placeholder="Dirección" require> <br>

                <input class="form-control" type="tel" name="telefono" placeholder="Teléfono" require>
                <hr>

                <p class="text-center">¿Ya tienes una cuenta? <a href="../index.php" class="texto1">¡Inicia sesión aquí!!</a></p>

                <p class="text-center"> <input type="radio" name="terminos"> Acepto los <a href="#">Terminos y Concidiones</a></p>

                <input type="submit" name="Registarse" value="Registrarse" class="btn btn-sm btn-success btn-block form-control"> <br>

                <input type="reset" name="Cancelar" value="Cancelar" class="btn btn-sm btn-secondary btn-block form-control">

                <hr>
            </form>
        </div>
    </div>
</body>

</html>