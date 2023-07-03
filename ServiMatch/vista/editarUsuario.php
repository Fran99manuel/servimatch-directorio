<?php require_once("../header/head.php"); ?>
<?php
    require_once('../modelo/crud.php');
    $objeto = new crud();
    $cedula = $_GET['cedula'];

    $consultarTiposUsuarios="SELECT * FROM tiposusuarios ";
    $rstiposUsuario = $objeto->consultarTiposUsuarios($consultarTiposUsuarios);
    

    $consultarUsuario = ("SELECT *,
    (select descripcion from tiposusuarios where idTiposUsuario = fkTiposUsuarios) as tiposUsuario,
    (select numero from telefonos where fkUsuarios = cedula ) as telefono,
    (select correo from email where fkUsuarios = cedula) as email
    from usuarios where cedula = ? ");
    $rstipoUsuario = $objeto->consultarregistro($consultarUsuario, $cedula);
    if(!$rstipoUsuario){
        exit();
    }else {
    ?>
        <main>
            <link rel="stylesheet" href="/ServiMatch/vista/estilos/stylesAdm.css">
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-8 col-md-4 mx-auto">
                        <div>
                            <form action="/ServiMatch/controlador/controladorEditarDatos.php" method="POST">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="usuario" value="<?=$rstipoUsuario->cedula;?>" readonly="readonly">
                                </div> <br>
                                <div class="form-group">
                                    <input type="text" placeholder="razonSocial" class="form-control" name="Razón Social" value="<?=$rstipoUsuario->razonSocial;?>">
                                </div><br>

                                <select class="form-control" name="tipoUsuario" id="fkTiposUsuario">
                                    <option value="<?=$rstipoUsuario->tiposUsuario?>"><?=$rstipoUsuario->tiposUsuario?></option>
                                    <?php
                                    foreach ($rstiposUsuario as $valores) {
                                    ?>
                                    <option value="<?= $valores->idTiposUsuario ?>"><?= $valores->descripcion ?></option>
                                    <?php
                                    }
                                    ?>
                                </select><br>

                                <div class="form-group">
                                    <input type="email" placeholder="Correo" class="form-control" name="correo" value="<?=$rstipoUsuario->email;?>">
                                </div><br>

                                <div class="form-group">
                                    <input type="tel" placeholder="Teléfono" class="form-control" name="telefono" value="<?=$rstipoUsuario->telefono;?>">
                                </div><br>

                                <div class="form-group">
                                    <input type="text" placeholder="Dirección" class="form-control" name="direccion" value="<?=$rstipoUsuario->direccion;?>">
                                </div><br>

                                <button type="submit" class="btn btn-success" name="editarUsuarios">
                                    Registrar
                                </button>

                                <button type="reset" class="btn btn-success" name="Editar">
                                    Cancelar
                                </button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php
}
