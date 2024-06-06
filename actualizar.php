<?php 
include "./clases/Conexion.php";
include "./clases/Crud.php";

$crud = new Crud();
$id = $_POST['id'];
$datos = $crud->obtenerDocumento($id);
$idMongo = $datos->_id;
?>

<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Actualizar Registro</h2>
                    
                    <form action="./procesos/actualizar.php" method="POST">
                        <input type="text" hidden value="<?php echo $idMongo; ?>" name="id">
                        
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->Nombre; ?>">

                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $datos->Apellido; ?>">

                        <label for="cedula">C.I</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $datos->Cedula; ?>">

                        <label for="horaLlegada">Hora de llegada</label>
                        <input type="time" class="form-control" id="horaLlegada" name="horaLlegada" value="<?php echo $datos->HoraLlegada; ?>">

                        <label for="fechaLlegada">Fecha</label>
                        <input type="text" class="form-control" id="fechaLlegada" name="fechaLlegada" value="<?php echo $datos->FechaLlegada; ?>">

                        <button class="btn btn-warning mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>
