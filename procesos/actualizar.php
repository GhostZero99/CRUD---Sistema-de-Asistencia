<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();
    
    $id = $_POST['id'];
    $datos = array(
        "Nombre" => $_POST['nombre'],
        "Apellido" => $_POST['apellido'],
        "Cedula" => $_POST['cedula'],
        "HoraLlegada" => $_POST['horaLlegada'],
        "FechaLlegada" => $_POST['fechaLlegada']
    );

    $respuesta = $Crud->actualizar($id,$datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("Location: ../index.php");
    } else {
        print_r($respuesta);
    }
?>