<?php
    include_once 'plantillas/doc-declaracion.inc.php';
    include_once 'plantillas/navbar.inc.php';
?>
<div class="container" style="padding-bottom: 30px;">
    <div class="row" style="padding-top: 50px;">
        <div class="col-md-9">
            <div class="card" style="border-color:#f1c40f;">
                <div class="card-header text-white" style="background-color: #f1c40f"><span class="h3">Manual de Tutorías Académicas</span></div>
                <div class="card-body"><iframe src="docs/SNIT_alumno.pdf" style="width: 780px;height: 500px;" frameborder="0"></iframe></div>
            </div>
        </div>
        <?php include_once 'plantillas/A-menu.inc.php'; ?>
    </div>
</div>
<?php
include_once 'plantillas/doc-cierre.inc.php';
?>