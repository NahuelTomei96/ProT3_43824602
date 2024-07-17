<?php

namespace App\Controllers;

use App\Models\usuario_models;
use CodeIgniter\Controller;

class usuario_Controller extends Controller {

    public function __construct() {
        helper(['form', 'url']); // Carga los helpers form y url de CodeIgniter
    }

    public function create() {
        $data['titulo'] = 'registrar'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado (head_view.php) con datos
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación (navbar_view.php)
        echo view('Backend/usuario/registrar'); // Carga la vista de registro de usuario (registrar.php en Backend/usuario)
        echo view('Frontend/footer_view'); // Carga la vista del pie de página (footer_view.php)
    }

    public function formValidation() {
        // Validación de campos del formulario
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]', // Validación del email único en la tabla 'usuarios'
            'pass' => 'required|min_length[3]|max_length[10]',
        ]);

        $formModel = new usuario_models(); // Instancia del modelo usuario_models
        $email = $this->request->getVar('email'); // Obtiene el valor del campo 'email' del formulario

        // Verifica si el email ya está en uso
        if ($formModel->where('email', $email)->first()) {
            session()->setFlashdata('fail', 'El email ya está en uso.'); // Mensaje de error si el email ya está registrado
            return redirect()->to('registrar');
            // Redirige al usuario a la página de registro si el email ya está registrado
        } else {
            if (!$input) {
                // Si la validación falla, establece el mensaje de error y redirige de vuelta al formulario
                session()->setFlashdata('fail', 'Error al registrarse. Por favor, revisa los campos e intenta nuevamente.');
                return redirect()->back()->withInput();
            } else {
                // Si la validación es exitosa, guarda los datos del usuario en la base de datos
                $formModel->save([
                    'nombre' => $this->request->getVar('nombre'),
                    'apellido' => $this->request->getVar('apellido'),
                    'usuario' => $this->request->getVar('usuario'),
                    'email' => $this->request->getVar('email'),
                    'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
                ]);

                session()->setFlashdata('success', 'Usuario registrado con éxito'); // Mensaje de éxito usando flashdata

                // Redirige al usuario a la página de inicio de sesión después del registro
                return redirect()->to('registrar');
            }
        }
    }
}
