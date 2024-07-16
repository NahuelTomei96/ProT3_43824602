
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-bottom: 20px; /* Añadimos un padding en la parte inferior del cuerpo para dejar espacio para el footer */
            margin-bottom: 50px; /* Agregamos un margen en la parte inferior para evitar que el footer se superponga */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mt-4 mb-4">Lista de Usuarios</h2>
    <div class="table-responsive-sm"> <!-- Usamos table-responsive-sm para dispositivos pequeños -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan</td>
                    <td>Pérez</td>
                    <td>jperez</td>
                    <td>jperez@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>María</td>
                    <td>Perez</td>
                    <td>mperez</td>
                    <td>mperez@gmail.com</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <!-- Agregar más filas según sea necesario -->
            </tbody>
        </table>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>