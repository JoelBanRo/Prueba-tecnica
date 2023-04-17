<?php require_once RUTA_APP . '/vistas/inc/header.php'; ?>
<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PERSONA <i class="bi bi-person-fill"></i></h5>
                        <a class="btn btn-primary" href="<?php echo RUTA_URL; ?>/Persona/index" role="button">IR</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VEHICULO <i class="bi bi-car-front-fill"></i></h5>
                        <a class="btn btn-primary" href="<?php echo RUTA_URL;?>/Vehiculo/index" role="button">IR</a>
                    </div>
                </div>
            </div>

        </div>
</main>

<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>