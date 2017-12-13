<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'app/conexion.ini.php';
?>
<body id='InicioSesion'>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2ecc71">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="img/LOGO2.png" style="width: 170px"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" aria-label="toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <h2 style="color: white">Plataforma Institucional de Tutorías Académicas</h2>
            <ul class="nav navbar-nav">
                <a><img src="img/Itesco_borde.png" style="height: 70px;padding-left: 300px;"></a>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #27ae60"></nav>

    <div class="container" style="padding-bottom: 30px">
        <div class="row" style="padding-top: 60px;padding-bottom: 90px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header border-primary text-light h3 bg-primary">Inicia sesión en la plataforma</div>
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Alumno" role="tab" aria-controls="home" aria-selected="true">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Tutores" role="tab" aria-controls="profile" aria-selected="false">Tutores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Admin" role="tab" aria-controls="contact" aria-selected="false">Administrador</a>
                            </li>
                        </ul>
                        <br>
                        <!--Ingreso Alumnos-->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Alumno" role="tabpanel" aria-labelledby="home-tab">
                                <p class="h3 text-primary">Acceso a Alumnos</p>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">No. Control</span>
                                    <input type="text" maxlength="8" class="form-control" placeholder="Ingresa 8 dígitos" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Contraseña</span>
                                    <input type="password" class="form-control" placeholder="Ingresa tu contraseña" arial-label="Username" arial-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="text-right">
                                    <a class="btn-lg btn-primary" href="inicio.php">Aceptar</a>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Recordar Contraseña
                                    </label>
                                    <br>
                                    <a href="#">¿olvidaste tu contraseña?</a>
                                </div>
                            </div>
                            <!--Ingreso Tutores-->
                            <div class="tab-pane fade" id="Tutores" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="h3 text-primary">Acceso a Tutores</p>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Usuario</span>
                                    <input type="text" maxlength="8" class="form-control" placeholder="Ingresa tu usuario" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Contraseña</span>
                                    <input type="password" class="form-control" placeholder="Ingresa tu contraseña" arial-label="Username" arial-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="text-right">
                                    <a class="btn-lg btn-primary" href="T-inicio.php">Aceptar</a>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Recordar Contraseña
                                    </label>
                                    <br>
                                    <a href="#">¿olvidaste tu contraseña?</a>
                                </div>
                            </div>
                            <!--Ingreso Administradores-->
                            <div class="tab-pane fade" id="Admin" role="tabpanel" aria-labelledby="contact-tab">
                                <p class="h3 text-primary">Acceso a Administrador</p>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Usuario</span>
                                    <input type="text" maxlength="8" class="form-control" placeholder="Ingresa tu usuario" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Contraseña</span>
                                    <input type="password" class="form-control" placeholder="Ingresa tu contraseña" arial-label="Username" arial-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="text-right">
                                    <a class="btn-lg btn-primary" href="Ad-inicio.php">Aceptar</a>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Recordar Contraseña
                                    </label>
                                    <br>
                                    <a href="#">¿olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>
