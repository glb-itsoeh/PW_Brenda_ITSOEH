<?php

include("conexion.php");
$con=conectar();

$matricula=$_GET['id'];

$sql="DELETE FROM alumno  WHERE matricula='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
