<body class="bodylogin">
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
      <div class="card-header text-center">
        <h2>Iniciar sesión</h2>
      </div>
      <div class="card-body">
        <form method="post" action="/enviarlogin">
          <div class="alert alert-warning" role="alert">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Correo</label>
            <input name="email" type="text" class="form-control" placeholder="Correo">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="Contraseña">
          </div>
          <button type="submit" class="btn btn-success">Ingresar</button>
          <a href="/login" class="btn btn-danger">Cancelar</a>
          <p>¿Aún no se registró? <a href="registrarse">Registrarse aquí</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</body>
</html>