<?php
	$marcafav = $_POST['MarcaFav']; 
    $usuario = $_POST['nombre'];
    $email  = $_POST['email'];
    $contra  = $_POST['contrasena'];
    $termino = $_POST['termino'];


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
        echo "Datos registrados existosate"."<br><br>";

	    echo "Tu usuario es: ".$usuario."<br>"; 
	    echo "Tu Marca favorita es: ".$marcafav."<br>";
	    echo "Su correo electronico es: ".$email."<br>";
	    echo "Aceptaste terminos y condiciones: ".$termino."<br>"; 
	    echo "contraseña es: ".$contra."<br>";
    }
?>