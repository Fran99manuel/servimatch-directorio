<?php require_once '../header/head.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiMatch</title>
    <link rel="icon" href="vista/imagenes/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../vista/estilos/inicio.css">
</head>

<body>

    <header>

        <img id="logo" src="../vista/imagenes/logo.png" alt="logo">

        <h1>ServiMatch</h1>

        <select name="" id="select">

            <option value="">cerrar seccion</option>

        </select>

    </header>
    <nav>
        <a href="">Buscar Servicio</a>
        <a href="">Calificar Servicio</a>
        <a href="">Tus datos</a>
        <a href="">Publicar Servicio</a>
    </nav>
    <div class="cuerpo">
        <main>
            <div class="servicios">
                <input type="search" name="buscarservicios" id="barradebusqueda" placeholder="buscar servicios">
                <button id="buscarServicio">buscar</button>
            </div>
            <div class="servicios-1">
                <h3>recomendaciones:</h3>
                <p><strong>Profesor de matematica-2498983</strong></p>
                <img class="fotos" src="../vista/imagenes/profesor-pizarra-dreamstime.jpg" alt="">
                <p>Descripcion:</p>
                <p>
                    ¡Hola! Mi nombre es jorge y soy un profesor de matemáticas experimentado y apasionado. <br>
                    Si estás buscando mejorar tus habilidades matemáticas y alcanzar tus objetivos académicos,<br>
                    puedo ayudarte.
                    Mi enfoque de enseñanza es personalizado, adaptado a las necesidades y <br>
                    habilidades individuales de cada estudiante. Utilizo diferentes técnicas de enseñanza para <br>
                    asegurarme de que mis estudiantes comprendan los conceptos matemáticos y sean capaces <br>
                    de aplicarlos en situaciones prácticas.
                </p>
                <button class="solicitar">solicitar</button>

            </div>

            <br> <br>
            
            <div class="servicios-1">
                <p><strong>Dentista</strong></p>
                <img class="fotos" src="../vista/imagenes/dentista.webp" alt="">
                <p>Descripcion:</p>
                <p>
                    Soy un dentista con experiencia y estoy aquí para ayudarte a cuidar de tu salud dental. <br>
                    Si estás buscando un servicio dental de alta calidad, adaptado a tus necesidades individuales, <br>
                    ¡has venido al lugar correcto!

                    Mi objetivo como dentista es proporcionar a mis pacientes una <br>
                    atención dental completa y
                    personalizada. Me aseguro de comprender las necesidades <br>
                    y preocupaciones individuales de cada
                    paciente y
                    trabajar juntos para desarrollar un plan de <br>
                    tratamiento que satisfaga sus necesidades y objetivos dentales.
                </p>


                <button class="solicitar">solicitar</button>

            </div>

        </main>

        <aside>
            <img src="../vista/imagenes/publicidad1.jpg" alt="publicidad">
            <img src="../vista/imagenes/imagen2.jpg" alt="publicidad">
        </aside>
        <footer>
            <p> para contanctarnos escribenos por los siguientes medios: <br>
                correo: <a href="#"> Francoche.ya.99@gmail.com </a> <br>
                telefono:3104612370 <br>
            </p>

        </footer>
    </div>
</body>

</html>