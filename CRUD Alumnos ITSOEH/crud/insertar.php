<?php
include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$carrera=$_POST['nombre_carrera'];


$sql="INSERT INTO alumno VALUES('$matricula','$nombre','$apellidos','$sexo', '$carrera')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>