<?php 
    session_start();


    if (!isset($_SESSION['usuario'])) {
        echo '<script language="javascript">alert("Primero Debes Iniciar Sesión Para Acceder a esta Página");
        window.location.href="/ServiMatch/IndexInicio.php"</script>';
                    
        die();
    }
    require_once("../header/head.php"); 
    include_once('../modelo/crud.php');
    $objeto = new crud();
?>

<div class="container  p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">

                <form action="/ServiMatch/controlador/contralorInsertarDatos.php" method="POST">
                    <div class="form-group">
                        <input require for="categorira" type="text" name="tipoUsuarioNuevo" class="form-control" placeholder="Ingresa el Tipo de Usuario" autofocus>
                    </div> <br>
                    <input type="submit" name="insertarTiposUsuarios" value="Guardar" class="btn btn-sm btn-success btn-block form-control"> <br><br>
                    <input type="reset" name="Cancelar" value="Cancelar" class="btn btn-sm btn-secondary btn-block form-control">

                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TIPO DE USUARIO</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <?php
                include_once("../controlador/controladorConsultarTipoUsuario.php");
                if ($rstipoUsuario) {
                    foreach ($rstipoUsuario as $valores) {
                        echo "<tr>";
                            echo "<td>$valores->idTiposUsuario</td>";
                            echo "<td>$valores->descripcion</td>";
                            echo "<td><a href='/ServiMatch/vista/administradorEditarTipoUsuario.php?id=$valores->idTiposUsuario'>Editar</a></td>";
                            echo "<td><a  href=../controlador/controladorEliminarTipoUsuario.php?id=$valores->idTiposUsuario'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                }else{
                    echo '<h4>NO HAY REGISTROS EN LA TABLA</h4>';
                }
                ?>
            </table>
        </div>
    </div>
</div>