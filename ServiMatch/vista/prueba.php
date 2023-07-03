<h1>BIENVENIDO</h1>
<H3>ESTAS EN EL LUGAR CORRECTO</H3>
<head>
<!DOCTYPE html>
<html>
<head>
  <title>Menú de Usuario Responsive Desplegable con Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales para el menú responsive */
    @media (max-width: 767px) {
      .navbar-collapse {
        background-color: #f8f8f8;
      }
      .navbar-nav li a {
        color: #333;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Menú de Usuario Responsive Desplegable con Bootstrap</h1>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">Mi Sitio</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> Usuario
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Configuración</a></li>
                <li class="divider"></li>
                <li><a href="#">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <h2>Contenido principal</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit ligula non dui tristique, in scelerisque nulla vehicula. Morbi rhoncus nisl at purus rhoncus, in lobortis diam venenatis. Vestibulum auctor feugiat enim at efficitur. Donec vitae urna purus. Sed semper ligula ac felis dignissim, vitae dignissim nulla porta. Sed efficitur quam quis suscipit aliquam. Pellentesque id sem id purus aliquam suscipit vitae at metus. Aliquam vestibulum mauris ac urna consequat, eget eleifend eros lacinia. Curabitur non felis nec odio auctor iaculis. Duis a leo eu justo finibus rutrum.</p>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>