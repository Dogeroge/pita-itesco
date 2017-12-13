<?php
include_once 'plantillas/doc-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<div class="container" style="padding-bottom: 30px;">
    <div class="row" style="padding-top: 50px">
        <div class="col-md-3">
            <div class="card" style="border-color: #1abc9c;">
                <div class="card-header h3 text-white" style="background-color: #1abc9c">Contactos</div>
                <div class="card-body">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">school</i></div><div class="col">Tutor</div></div></a>
                        <a class="list-group-item list-group-item-action" href="#" ><div class="row"><div class="col-1"><i class="material-icons">face</i></div><div class="col">Grupo</div></div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="chat" class="card" style="height: 600px;border-color: #e67e22;">
                <div class="card-header h3 text-white" style="background-color: #e67e22;">Chat Privado</div>
                <div class="card-body text-right">
                    <h3><span class="badge badge-secondary">Destinatario:</span> Tutor</h3>
                    <div class="card" style="height: 330px;overflow-y: scroll"></div>
                    <br>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribe un mensaje...">
                    <br>
                    <button class="btn btn-success">Enviar</button>
                </div>
            </div>
        </div>
        <?php include_once 'plantillas/A-menu.inc.php'; ?>
    </div>
</div>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>
