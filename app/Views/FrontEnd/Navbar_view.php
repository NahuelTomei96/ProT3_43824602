<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <div class="container-fluid">
        <?php if ($perfil == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a>Admin: <?php echo $nombre; ?></a>
            </div>
        <?php elseif($perfil == 2): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a>Cliente: <?php echo $nombre; ?></a>
            </div>
        <?php endif; ?>
        <a class="navbar-brand" href="<?php echo base_url('Principal'); ?>">
            <img src="<?php echo base_url('assets/img/logosinbg.png'); ?>" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'Principal' ? ' active' : ''); ?>" aria-current="page" href="<?php echo base_url('Principal'); ?>">Principal</a>
                </li>
                <?php if ($perfil != 2): // Ocultar para clientes ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'Nosotros' ? ' active' : ''); ?>" href="<?php echo base_url('Nosotros'); ?>">Nosotros</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'formacion' ? ' active' : ''); ?>" href="<?php echo base_url('formacion'); ?>">Formación</a>
                </li>
                <?php if ($perfil == 1): // Solo visible para admins ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'usuarios' ? ' active' : ''); ?>" href="<?php echo base_url('usuarios'); ?>">Usuarios</a>
                    </li>
                <?php endif; ?>
                <?php if (!$session->get('logged_in')): ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'registrar' ? ' active' : ''); ?>" href="<?php echo base_url('registrar'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'login' ? ' active' : ''); ?>" href="<?php echo base_url('login'); ?>">Ingresar</a>
                    </li>
                <?php endif; ?>
                <?php if ($perfil == 1 || $perfil == 2): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a>
                    </li>
                <?php endif; ?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-secondary" type="button">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<!-- Scripts JS necesarios para Bootstrap -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
