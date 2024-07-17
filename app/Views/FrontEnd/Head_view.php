<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Configuración del juego de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la escala inicial para dispositivos móviles -->
    <title><?php echo($titulo); ?></title> <!-- Título de la página dinámico -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet"> <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet"> <!-- Enlace al archivo de estilos personalizados -->
</head>
<div class="Header_nuevo"> <!-- Contenedor del encabezado con clase personalizada -->
    <header>
        <img src="<?php echo base_url('assets/img/Nuevologo.png'); ?>" alt="LogoHeader" class="img-header"> <!-- Imagen del encabezado con ruta dinámica utilizando base_url() -->
    </header>
</div>
