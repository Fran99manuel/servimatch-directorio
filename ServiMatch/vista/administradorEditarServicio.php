<?php require_once("../header/head.php"); ?>
<?php 
    include_once('../modelo/crud.php');
    $objeto = new crud();
    $idEditar =$_GET['editarServicio'];

    $consultarCategoria = "SELECT * FROM categorias";
    $rscategoria = $objeto->consultarTiposUsuarios($consultarCategoria);

    $ConsultaServicio =("SELECT *,
    (select tipo from categorias where  idCategoria = fkCategoria) as categoria
    FROM servicios where idServicio = ? ");

    $rsConsultaUsuarios = $objeto->consultarregistro($ConsultaServicio, $idEditar);
    if (!$rsConsultaUsuarios) {
        exit();
    } else {
    ?>
    <div class="container  p-4">
        <link rel="stylesheet" href="/ServiMatch/vista/estilos/stylesAdm.css">
        <div class="row">
                <div class="col-md-4 mx-auto">
                    <form action="/ServiMatch/controlador/controladorEditarDatos.php" method="POST">

                    <div class="form-group">
                        <input require for="categorira" type="text" name="nombreServicio" value="<?=$rsConsultaUsuarios->nombre?>" class="form-control" placeholder="Nuevo Nombre del Servicio" autofocus>
                    </div> <br>

                    <div class="form-group">
                        <input require for="categorira" type="text" name="descripcion" class="form-control" value="<?=$rsConsultaUsuarios->descripcion?>" placeholder="Descripción del Servicio" autofocus>
                    </div> <br>

                    <select name="categoria" id="categoria" class="form-control">

                        <option value="<?= $rsConsultaUsuarios->categoria?>"> <?= $rsConsultaUsuarios->categoria?></option>
                        <?php
                        foreach ($rscategorias as $valores) {
                        ?>
                        <option value="<?= $valores->idCategoria ?>"><?= $valores->tipo ?></option>
                        <?php
                        }
                        ?>
                    </select> <br>

                    <input type="submit" name="editarServicios" value="Editar" class="btn btn-sm btn-success btn-block form-control"> <br><br>
                    <input type="reset" name="Cancelar" value="Cancelar" class="btn btn-sm btn-secondary btn-block form-control">
                </form>
            </div>
        </div>
    </div>
<?php
}