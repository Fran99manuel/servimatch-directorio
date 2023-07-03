<?php 
    require_once("../header/head.php"); 
    session_start();


    if (!isset($_SESSION['usuario'])) {
        echo '<script language="javascript">alert("Primero Debes Iniciar Sesión Para Acceder a esta Página");
            window.location.href="/ServiMatch/index.html"</script>';
            
        die();
    }
?>

<div class="container  p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">

                <form action="/ServiMatch/controlador/contralorInsertarDatos.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="categoria" class="form-control" placeholder="Ingresa el Tipo de Categoria" autofocus>
                    </div> <br>
                    <input type="submit" name="insertarCategoria" value="Guardar" class="btn btn-sm btn-success btn-block form-control"> <br><br>
                    <input type="reset" name="Cancelar" value="Cancelar" class="btn btn-sm btn-secondary btn-block form-control">

                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TIPO DE CATEGORIA</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>

                </thead>
                <?php
                    include_once("../controlador/controladorConsultarCategoria.php");
                    if ($rscategoria) {
                        foreach ($rscategoria as $valores) {
                            echo "<tr>";
                            echo "<td>$valores->idCategoria</td>";
                            echo "<td>$valores->tipo</td>";
                            echo "<td><a href='/ServiMatch/vista/administradoresEditar.php?editarCategoria=$valores->idCategoria'>Editar</a></td>";
                            echo "<td><a  href='/ServiMatch/controlador/controladorEliminarCategoria.php?eliminarCategoria= $valores->idCategoria>Eliminar</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo '<h4>NO HAY REGISTROS EN LA TABLA</h4>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>