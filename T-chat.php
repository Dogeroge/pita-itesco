<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar_tutor.inc.php';
?>
<div class="container" style="padding-bottom: 30px;">
    <div class="row" style="padding-top: 50px">
        <div class="col-md-3">
            <div class="card" style="height: 600px;border-color: #1abc9c;">
                <div class="card-header h3 text-white" style="background-color: #1abc9c">Contactos</div>
                <div class="card-body" style="overflow-y: scroll;">
                    <div class="list-group">
                        <!--<a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">school</i></div><div class="col">Tutor Shidori</div></div></a>-->
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Diego Ixba</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Jennyfer Gutiérrez</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Irving Samuel</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">José Robledo</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Luis Moreno</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Elisa Castañeda</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Rubén Hernández</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Carlos Fuentes</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Martín Méndez</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Zaira Castelán</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Uriel Antonio</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Lizbeth Hernández</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Brian Seoane</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Carmen Itzel</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Amairany Rosas</div></div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="chat" class="card" style="height: 600px;border-color: #e67e22;">
                <div class="card-header h3 text-white" style="background-color: #e67e22;">Chat Privado</div>
                <div class="card-body text-right">
                    <h3><span class="badge badge-secondary">Destinatario:</span> Diego Ixba</h3>
                    <div class="card" style="height: 330px;overflow-y: scroll"></div>
                    <br>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribe un mensaje...">
                    <br>
                    <button class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
        <?php include_once 'plantillas/T-menu.inc.php'; ?>
    </div>
</div>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>
