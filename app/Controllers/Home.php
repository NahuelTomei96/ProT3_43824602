<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Frontend/head_view');
        echo view('Frontend/navbar_view');
        echo view('Frontend/Principal');
        echo view('Frontend/footer_view');
    }

    public function Nosotros()
    {
        echo view('Frontend/head_view');
        echo view('Frontend/navbar_view');
        echo view('Frontend/Nosotros');
        echo view('Frontend/footer_view');
    }

    public function Acerca_de()
    {
        echo view('Frontend/head_view');
        echo view('Frontend/navbar_view');
        echo view('Frontend/acerca_de');
        echo view('Frontend/footer_view');
    }

    public function Registrarse()
    {
        echo view('Frontend/head_view');
        echo view('Frontend/navbar_view');
        echo view('Frontend/registrarse');
        echo view('Frontend/footer_view');
    }

    public function login()
    {
        echo view('Frontend/head_view');
        echo view('Frontend/navbar_view');
        echo view('Frontend/login');
        echo view('Frontend/footer_view');
    }
}
