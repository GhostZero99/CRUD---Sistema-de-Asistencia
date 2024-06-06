<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();
    
    $datos = array(
        "Nombre" => $_POST['nombre'],
        "Apellido" => $_POST['apellido'],
        "Cedula" => $_POST['cedula'],
        "HoraLlegada" => $_POST['horaLlegada'],
        "FechaLlegada" => $_POST['fechaLlegada'],
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }
?>