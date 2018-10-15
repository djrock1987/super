<?php
    $puerto = "localhost";
    $usuario = "root";
    $contraser = "root";
    $ddbb = "supermercado";
    $conexion = mysqli_connect($puerto,$usuario,$contraser,$ddbb);
    if (mysqli_connect_errno()){
        # code...
        echo "No se puede conectar a la base de datos" . mysqli_connect_error();
    }
    $marcafav = mysqli_real_escape_string($conexion, $_POST['MarcaFav']); 
    $usuario =  mysqli_real_escape_string($conexion, $_POST['nombre']);
    $email  =  mysqli_real_escape_string($conexion, $_POST['email']);
    $contra  =  mysqli_real_escape_string($conexion, $_POST['contrasena']);
    $termino =  mysqli_real_escape_string($conexion, $_POST['termino']);

    $insertar = "INSERT INTO registros(nombre, contresenia, email, supermercado, terminos)VALUES('$usuario', '$contra', '$email', '$marcafav', '$termino')";

if (!mysqli_query($conexion, $insertar)) {
    # code...
    die('Error: ' . mysqli_error($conexion));
    }else{
        echo "Datos registrados existosate";
    }
?>