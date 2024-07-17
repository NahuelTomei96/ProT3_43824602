<?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-warning">
        <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Estilos CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body class="bodylogin">
    <div class="container-fluid">
        <div class="content py-3 my-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="login">
                        <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Mantener sesión iniciada</label>
                            </div>
                            <div class="mb-3">
                                <a href="#">¿Has olvidado tu contraseña?</a>
                                <a href="<?php echo base_url('registrar'); ?>">¿Deseas registrarte?</a>
                            </div>
                            <button type="submit" class="btn btn-secondary">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
