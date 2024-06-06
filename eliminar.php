


<?php 
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php";

    $crud = new Crud();
    $id  = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
 ?>


<div class="container">
        <div class="row">
            <div class="col">
               <div class="card mt-4">
                 <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Eliminar Registro</h2>
                    
                  <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>C.I</th>
                        <th>Hora de llegada</th>
                        <th>Fecha</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $datos->Nombre; ?></td>
                            <td><?php echo $datos->Apellido; ?></td>
                            <td><?php echo $datos->Cedula; ?></td>
                            <td><?php echo $datos->HoraLlegada; ?></td>
                            <td><?php echo $datos->FechaLlegada; ?></td>
                        </tr>
                    </tbody>
                  </table>
                  <hr>
                  <div class="alert alert-danger" role="alert">
                    <p>¿Está seguro de querer eliminar este regístro?</p>
                    <p>
                        Una vez eliminado, no podrá ser recuperado.
                    </p>
                  <form action="./procesos/eliminar.php" method="POST">
                    <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden>
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-user-xmark"></i> Eliminar
                    </button>
                  </form>
                 </div>
               </div>
             </div>
        </div>
    </div>

<?php include "./scripts.php"; ?>