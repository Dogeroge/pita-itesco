<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar_tutor.inc.php';
?>

<div class="container">
    <div class="row" style="padding-top: 50px;padding-bottom: 30px;">
        <div class="col-md-9">
            <div class="card border-primary" style="height: 600px">
                <div class="card-header text-light" style="background-color: #3498db">
                    <h4>Centro de Actividades</h4>
                </div>
                <div class="card-body" style="overflow-y: scroll;">
                    <table class="table table-striped">
                        <thead class="text-white" style="background-color: #c0392b">
                        <th scope="col">#</th>
                        <th scope="col">Nombre de la actividad</th>
                        <th scope="col">Estatus</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="3" class="text-center text-white" style="background-color: #e74c3c;">CAPÍTULO 2</th>
                            </tr>
                            <tr>
                                <th><input type="radio" checked></th>
                                <td>Linea de Vida</td>
                                <th class="text-success">Activo</th>
                            </tr>
                            <tr>
                                <th><input type="radio" checked></th>
                                <td>Análisis FODA</td>
                                <th class="text-success">Activo</th>
                            </tr>
                            <tr>
                                <th><input type="radio" checked></th>
                                <td>Administración del tiempo</td>
                                <th class="text-success">Activo</th>
                            </tr>
                            <tr>
                                <th><input type="radio" checked></th>
                                <td>El ser humano integral</td>
                                <th class="text-success">Activo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Desarrollo integral</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center text-white" style="background-color: #e74c3c;">CAPÍTULO 3</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Desarrollo de habilidades de pensamiento</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Habilidades de estudio efectivo</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>La memoria</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Habilidades básicas del pensamiento</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>La lectura</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Comprensión de la Lectura</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Expresar Ideas y pensamientos escritos</td>
                                <th>inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Mapa mental y conceptual</td>
                                <th>Inactivo</th>
                            </tr>
                            <tr class="text-muted">
                                <th><input type="radio"></th>
                                <td>Esquema, Cuadro sinóptico y comparativo</td>
                                <th>Inactivo</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include_once 'plantillas/T-menu.inc.php'; ?>
    </div>
</div>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>

