<?php require_once("../header/head.php"); ?>
<?php
    require_once('../modelo/crud.php');
    $objeto = new crud();
    $idTiposUsuario = $_GET['id'];

    $consulta = "SELECT * FROM servimatch.tiposusuarios WHERE idTiposUsuario = ? ";
    
    $rsconsulta = $objeto->consultarregistro($consulta, $idTiposUsuario);
    if(!$rsconsulta){
        exit();
    }else{
    ?>
        <div class="container p-4">
            <link rel="stylesheet" href="/ServiMatch/vista/estilos/stylesAdm.css">

            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="">
                        <form action="/ServiMatch/controlador/controladorEditarDatos.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="id" value="<?= $rsconsulta->idTiposUsuario; ?>"  class="form-control" readonly>
                            </div> <br>
                            <div class="form-group">
                                <input type="text" name="tipoUsuarioNuevo" value="<?= $rsconsulta->descripcion; ?>"  class="form-control">
                            </div> <br>
                            <button type="submit" class="btn btn-success" name="editarTiposUsuarios">
                                Editar
                            </button>
                            <button type="reset" class="btn btn-success" name="Cancelar">
                                Cancelar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    
?>