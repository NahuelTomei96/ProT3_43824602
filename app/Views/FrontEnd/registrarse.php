<body class="bodyregistrarse">
<div class="container mt-2 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
      <div class="card-header text-center">
        <h2>Registrarse</h2>
      </div>
      <div class="card-body">
        <form method="post" action="/enviar-form">
          <div class="alert alert-danger" role="alert">
            
          </div>
          <div class="alert alert-danger" role="alert">
           
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="Nombre">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="correo@gmail.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
            <input type="text" name="usuario" class="form-control" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="Contraseña">
          </div>
          <button type="submit" class="btn btn-success">Guardar</button>
          <a href="/registro" class="btn btn-danger">Cancelar</a>
          <button type="reset" class="btn btn-secondary">Borrar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</body>
</html>