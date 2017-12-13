<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'app/conexion.ini.php';
?>
<body id='Registro'>
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

    <div class="container">
        <div class="row" style="padding-top: 60px;padding-bottom: 60px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card border-info">
                    <div class="card-header border-info text-light h3 bg-info">Ingresa tus datos para Registrarte</div>
                    <div class="card-body">
                        <ul class="nav nav-pills" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Alumno" role="tab" aria-controls="home" aria-selected="true">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Tutores" role="tab" aria-controls="profile" aria-selected="false">Tutores</a>
                            </li>
                        </ul>
                        <br>
                        <!--Ingreso Alumnos-->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Alumno" role="tabpanel" aria-labelledby="home-tab">
                                <p class="h3 text-info">Solicitud de Registro para Alumnos</p>
                                <br>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nombre/s:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Fecha de Nacimiento:</label>
                                        <input type="text" maxlength="10" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/aaaa">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">No.control:</label>
                                        <input type="text" maxlength="8" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Carrera:</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Administración</option>
                                            <option>Animación Digital y Efectos Visuales</option>
                                            <option>Bioquímica</option>
                                            <option>Eléctrica</option>
                                            <option>Electrónica</option>
                                            <option>Gestión Empresarial</option>
                                            <option>Industrial</option>
                                            <option>Informática</option>
                                            <option>Mecánica</option>
                                            <option>Mecatrónica</option>
                                            <option>Petrolera</option>
                                            <option>Química</option>
                                            <option>Sistemas Computacionales</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Semestre:</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1er. Semestre</option>
                                            <option>2do. Semestre</option>
                                            <option>3er. Semestre</option>
                                            <option>4to. Semestre</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Correo Electrónico:</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                </form>
                                <br>
                                <!-- Button trigger modal -->
                                <div class="text-right">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                        Aceptar
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content border-info">
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title" id="exampleModalLabel">¡Solicitud enviada!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="h3 text-info">¡Tu solicitud ha sido enviada!</p>
                                                <br>
                                                <p>tu solicitud de ingreso a la plataforma ha sido enviada al Administrador. Mantente a la espera de tu contraseña de acceso que se enviará a tu cuenta de correo.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-info" href="index.php">Aceptar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text-right">
                                    <a class="btn-lg btn-info" href="inicio.php">Aceptar</a>
                                </div>-->
                            </div>
                            <!--Ingreso Tutores-->
                            <div class="tab-pane fade" id="Tutores" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="h3 text-info">Solicitud de Registro para Tutores</p>
                                <br>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nombre/s:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Apellido Paterno:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Fecha de Nacimiento:</label>
                                        <input type="text" maxlength="10" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/aaaa">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">ID Trabajador:</label>
                                        <input type="text" maxlength="8" class="form-control" id="exampleFormControlInput1" placeholder=". . .">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">División:</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Administración</option>
                                            <option>Animación Digital y Efectos Visuales</option>
                                            <option>Bioquímica</option>
                                            <option>Eléctrica</option>
                                            <option>Electrónica</option>
                                            <option>Gestión Empresarial</option>
                                            <option>Industrial</option>
                                            <option>Informática</option>
                                            <option>Mecánica</option>
                                            <option>Mecatrónica</option>
                                            <option>Petrolera</option>
                                            <option>Química</option>
                                            <option>Sistemas Computacionales</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Correo Electrónico:</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                </form>
                                <br>

                                <!-- Button trigger modal -->
                                <div class="text-right">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                                        Aceptar
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content border-info">
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title" id="exampleModalLabel">¡Solicitud enviada!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="h3 text-info">¡Tu solicitud ha sido enviada!</p>
                                                <br>
                                                <p>tu solicitud de ingreso a la plataforma ha sido enviada al Administrador. Mantente a la espera de tu contraseña de acceso que se enviará a tu cuenta de correo.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-info" href="index.php">Aceptar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="text-right">
                                    <a class="btn-lg btn-info" href="inicio.php">Aceptar</a>
                                </div>-->
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
