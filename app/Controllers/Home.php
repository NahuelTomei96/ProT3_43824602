<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'pagina_principal'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('Frontend/Principal'); // Carga la vista principal (Principal.php)
        echo view('Frontend/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }

    public function Nosotros()
    {
        $data['titulo'] = 'Nosotros'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('Frontend/Nosotros'); // Carga la vista de "Nosotros" (Nosotros.php)
        echo view('Frontend/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }

    public function Formacion()
    {
        $data['titulo'] = 'formacion'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('Frontend/formacion'); // Carga la vista de "Formación" (formacion.php)
        echo view('Frontend/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }

    public function Registrar()
    {
        $data['titulo'] = 'registrar'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('Backend/usuario/registrar'); // Carga la vista de registro de usuario (registrar.php en Backend/usuario)
        echo view('Frontend/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }

    public function login()
    {
        $data['titulo'] = 'login'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('Backend/usuario/login'); // Carga la vista de inicio de sesión de usuario (login.php en Backend/usuario)
        echo view('Frontend/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }

    public function usuarios()
    {
        $data['titulo'] = 'usuarios'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('Backend/usuario/usuarios'); // Carga la vista de inicio de sesión de usuario (login.php en Backend/usuario)
        echo view('Frontend/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }



}

