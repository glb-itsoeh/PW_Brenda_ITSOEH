<?php

include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$nombre_carrera=$_POST['nombre_carrera'];

$sql="UPDATE alumno SET  nombre='$nombre',apellidos='$apellidos',sexo='$sexo',nombre_carrera='$nombre_carrera' WHERE matricula='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
