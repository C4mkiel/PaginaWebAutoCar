<?php
    $usuario="root";
    $password="";
    $servidor="localhost";
    $basededatos="prueba";




    $conexion = mysqli_connect  ($servidor,$usuario,"") or die
    ("Error con el servidor de la Base de datos");
    $db = mysqli_select_db($conexion, $basededatos) or die
    ("Error conexion al conectarse a la Base de datos");
    $rut=$_POST['rut'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['email'];
    $telefono=$_POST['phone'];
    $ciudadR=$_POST['lstCiudadRetiro'];
    $fechaR=$_POST['fechaRetiro'];
    $horaR=$_POST['horaRetiro'];
    $ciudadD=$_POST['lstCiudadDevolucion'];
    $fechaD=$_POST['fechaDevolucion'];
    $horaD=$_POST['horaDevolucion'];
    $tipoV=$_POST['lstTipoV'];
    $sql="INSERT INTO arriendo VALUES ('$rut','$nombre','$correo','$telefono','$ciudadR','$fechaR','$horaR','$ciudadD','$fechaD','$horaD','$tipoV')";
    $ejecutar=mysqli_query($conexion, $sql);
    
    if(!$ejecutar){
        echo"ha ocurrido un error, intente nuevamnete!";
    }else{
        echo"<h1>Su mensaje se ha guardado en la base de datos</h1>";
    }