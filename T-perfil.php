<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar_tutor.inc.php';
?>
<div class="container" style="padding-top: 50px;padding-bottom: 70px">
    <h1 class="text-info display-2">Perfil</h1>
    <br>
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="card rounded-circle">
                <div class="card-body"><img src="img/prueba1.png" class="rounded-circle" alt="responsibe image"></div>
            </div>
            <br>
            <a class="btn btn-lg btn-info" href="#"><i class="material-icons">photo</i> Cambiar imagen</a>
        </div>
        <div class="col-md-8">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre/s:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Edwin Ociel">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellido Paterno:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rosas">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellido Materno:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Carrasco">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Fecha de Nacimiento:</label>
                    <input type="text" maxlength="10" class="form-control" id="exampleFormControlInput1" placeholder="01-11-1994">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Dirección:</label>
                    <input type="text" maxlength="10" class="form-control" id="exampleFormControlInput1" placeholder="calle, No, colonia.. etc">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Número de Contacto:</label>
                    <input type="text" maxlength="10" class="form-control" id="exampleFormControlInput1" placeholder="(000)000-00-00">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">ID Trabajador:</label>
                    <input type="text" maxlength="8" class="form-control" id="exampleFormControlInput1" placeholder="13081060">
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
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="edwin_roca@hotmail.com">
                </div>
            </form>
            <a class="btn btn-lg btn-success" href="#">Guardar Cambios</a>
        </div>
    </div>
</div>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>
