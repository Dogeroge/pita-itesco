<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'app/conexion.ini.php';
?>

<body id='BGLogin'>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2ecc71">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="img/LOGO2.png" style="width: 170px"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" aria-label="toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <h2 style="color: white">Plataforma Institucional de Tutorías Académicas</h2>
            <ul class="nav navbar-nav mr-auto">
                <!--<li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Iniciar Sesión</a></li> -->
            </ul>
            <ul class="nav navbar-nav">
                <!-- <li class="nav-item"><a class="btn btn-success" style="background-color: #27ae60" href="#" role="button">Registrarse</a></li>
                 <li class="nav-item"><a class="btn btn-light" href="#" role="button">Iniciar Sesión</a></li> -->
                <a><img src="img/Itesco_borde.png" style="height: 70px"></a>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #27ae60"></nav>

    <div class="container" style="padding-bottom: 70px;">
        <div class="row" style="padding-top: 50px">
            <div class="col-md-8">
                <h1 class="text-white display-4" style="text-shadow: 0px 0px 10px black"><em>Dando seguimiento a la situación académica del alumno</em></h1>
            </div>
        </div>

        <div class="row" style="padding-top: 180px;padding-bottom: 52px;">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6"><a class="btn-lg btn-block btn-primary text-center" href="inicioSesion.php" style="box-shadow: 0px 0px 50px black"><p class="h1">Iniciar Sesión</p></a></div>
                    <div class="col-md-6"><a class="btn-lg btn-block btn-success text-center" href="registro.php" style="box-shadow: 0px 0px 50px black"><p class="h1">Registrarse</p></a></div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>

