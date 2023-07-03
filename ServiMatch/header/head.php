
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>ServiMatch</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

    <nav class="navbar navbar-expand-lg bg-body-tertiary-info bg-info">
      <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

          <ul class="navbar-nav">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MENU
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/ServiMatch/vista/administradorTipoUsuario.php">Tipos de Usuario</a></li>
                <li><a class="dropdown-item" href="/ServiMatch/vista/administradorCategoria.php">Categorias</a></li>
                <li><a class="dropdown-item" href="/ServiMatch/vista/administradorServicios.php">Servicios</a></li>
                <li><a class="dropdown-item" href="/ServiMatch/vista/administradorUsuarios.php">Usuario</a></li>
                <li><a class="dropdown-item" href="/ServiMatch/index.php">Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <a class= "navbar-brand" href="/ServiMatch/Index.php">Iniciar sesión</a>
        <a class= "navbar-brand" href="vista/registro.php">Registrarse</a>
        <a class= "navbar-brand" href="/ServiMatch/controlador/cerrarSecion.php">Cerrar Sesión</a>
      </div>
    </nav>
  </body>
</html>