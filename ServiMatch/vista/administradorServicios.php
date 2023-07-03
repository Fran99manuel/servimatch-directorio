<?php 
    session_start();


    if (!isset($_SESSION['usuario'])) {
        echo '<script language="javascript">alert("Primero Debes Iniciar Sesión Para Acceder a esta Página");
        window.location.href="/ServiMatch/index.html"</script>';
                
        die();
    }
    require_once("../header/head.php"); 
?>

<div class="container  p-4">

    <div class="row">

        <div class="col-md-4">
            <!-- <link rel="stylesheet" href="/ServiMatch/vista/estilos/stylesAdm.css"> -->
            <style>
                .card {font-family: Helvetica;}
            </style>
            <div class="card card-body">
                <form action="/ServiMatch/controlador/contralorInsertarDatos.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="servicio" class="form-control" placeholder="Ingresa el Servicio" autofocus>
                    </div> <br>
                    <div class="form-group">
                        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion de la Categoria">
                    </div> <br>
                    <select name="categoria" id="categoria" class="form-control">

                        <option value="0">Selecione la Categoria del Servicio</option>

                        <?php
                        require_once("../controlador/controladorConsultarCategoria.php");
                        foreach ($rscategoria as $valores) {
                        ?>
                            <option value="<?= $valores->idCategoria ?>"><?= $valores->tipo ?></option>
                        <?php
                        }
                        ?>

                    </select> <br>
                    <input type="submit" name="insertarServicios" value="Guardar" class="btn btn-sm btn-success btn-block form-control"> <br><br>
                    <input type="reset" name="Cancelar" value="Cancelar" class="btn btn-sm btn-secondary btn-block form-control">

                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCIÓN</th>
                        <th>CATEGORIA</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <?php
                include_once("../controlador/controladorConsultarServicio.php");
                if ($rsServicios) {
                    foreach ($rsServicios as $valores) {
                        echo "<tr>";
                            echo "<td>$valores->idServicio</td>";
                            echo "<td>$valores->nombre</td>";
                            echo "<td>$valores->descripcion</td>";
                            echo "<td>$valores->tipo</td>";

                            echo "<td><a href='/ServiMatch/vista/administradorEditarServicio.php?editarServicio=$valores->idServicio'>Editar</a></td>";

                            echo "<td><a  href='../controlador/controladorEliminarServicio.php?id=$valores->idServicio'>Eliminar</a></td>";
                            
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