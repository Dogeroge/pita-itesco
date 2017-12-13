<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
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
                                <th colspan="3" class="text-center text-white" style="background-color: #e74c3c;">UNIDAD 1</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Linea de Vida</td>
                                <th class="text-success">Entregada</th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Análisis FODA</td>
                                <th class="text-success">Entregada</th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Administración del tiempo</td>
                                <th class="text-danger">No Entregada</th>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>El ser humano integral</td>
                                <th class="text-info">Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>5</th>
                                <td>Desarrollo integral</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr>
                                <th colspan="3" class="text-center text-white" style="background-color: #e74c3c;">UNIDAD 2</th>
                            </tr>
                            <tr class="text-muted">
                                <th>6</th>
                                <td>Desarrollo de habilidades de pensamiento</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>7</th>
                                <td>Habilidades de estudio efectivo</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>8</th>
                                <td>La memoria</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>9</th>
                                <td>Habilidades básicas del pensamiento</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>10</th>
                                <td>La lectura</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>11</th>
                                <td>Comprensión de la Lectura</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>12</th>
                                <td>Expresar Ideas y pensamientos escritos</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>13</th>
                                <td>Mapa mental y conceptual</td>
                                <th>Pendiente</th>
                            </tr>
                            <tr class="text-muted">
                                <th>14</th>
                                <td>Esquema, Cuadro sinóptico y comparativo</td>
                                <th>Pendiente</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include_once 'plantillas/A-menu.inc.php'; ?>
    </div>
</div>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>

