<?php include "./header.php"; ?>

<div class="container">
        <div class="row">
            <div class="col">
               <div class="card mt-4">
                 <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Agregar Nuevo Registro</h2>
                    
                   <form action="./procesos/insertar.php" method="post">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" require>
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" require>
                        <label for="cedula">C.I</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" require>
                        <label for="horaLlegada">Hora de llegada</label>
                        <input type="Time" class="form-control" id="horaLlegada" name="horaLlegada" require>
                        <label for="fechaLlegada">Fecha</label>
                        <input type="date" class="form-control" id="fechaLlegada" name="fechaLlegada" require>
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Agregar
                        </button>
                   </form>
                 </div>
               </div>
             </div>
        </div>
    </div>

<?php include "./scripts.php"; ?>