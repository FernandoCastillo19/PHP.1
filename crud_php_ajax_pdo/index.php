<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.datatables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">

    <title>CRUD con PHP, PDO, JAX y Datatatables.js</title>
  </head>
  <body>
   <div class="container">
        <h1 class="text-center">CRUD con PHP, PDO, JAX y Datatatables.js</h1>
        <h1 class="text-center">www.render2web.com</h1>

        <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
                        
                        <i class="bi bi-plus-circle-fill"></i> Crear
                        </button>
                </div>
            </div>
        </div>
   </div>
   <br />
   <br />

   <div class="table-responsive">
        <table id="datos_usuario" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Imagen</th>
                    <th>Fecha Creacion</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>

        </table>
   </div>


<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <form method="POST" id="formulario" enclype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                    <label for="nombre">Ingrese el nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <br />

                    <label for="apellidos">Ingrese el apellido</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                    <br />

                    <label for="telefono">Ingrese el telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">
                    <br />

                    <label for="email">Ingrese el email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <br />

                    <label for="imagen">Seleccione una imagen</label>
                    <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                    <span id="imagen-subida"></span>
                    <br />
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_usuario" id="id_usuario">
                    <input type="hidden" name="operacion" id="operacion">
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                </div>
            </div>
        </form>
      </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>