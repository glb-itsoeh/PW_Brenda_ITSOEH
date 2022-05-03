<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE matricula='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="matricula" value="<?php echo $row['matricula']  ?>">
                                
                                <!--<input type="text" class="form-control mb-3" name="matricula" placeholder="matricula" value="-->
                                <?php echo $row['matricula']  ?>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']  ?>">
                                
                                
                               <?php
                               if( $row['sexo'] == 'M' ){
                               
                                echo '<input type="radio" class="form-check-input" name="sexo" value="F" ><label>Femenino</label>
                                <input type="radio" class="form-check-input" name="sexo" value="M" checked ><label>Masculino</label>';
                               }else
                               {
                                
                                echo'<input type="radio" class="form-check-input" name="sexo" value="F" checked ><label>Femenino</label>
                                <input type="radio" class="form-check-input" name="sexo" value="M"  ><label>Masculino</label>';
                               }
                               
                               
                           // echo'<select name="nombre_carrera" class="form-select">';

                              
                            //$sql="SELECT * FROM carrera";
                           // $query=mysqli_query($con,$sql);
                               
                            
                           /* while ($row=mysqli_fetch_array($query))
                            {
                                echo '<option value='.$row['numero_carrera'.'>'.$row['nombre_carrera'].'numero: ' ].'</option>';
                            }
	                           
	                           
                                echo '</select>';*/

                               ?> 
                                <select name="nombre_carrera" class="form-select">
							   
                               <?php foreach ($query as $carreras): ?>
                               <option value="<?php echo $carreras['nombre_carrera']?>"><?php echo $carreras['nombre_carrera']?></option>
                               <?php endforeach ?>
                               <option value="Gestión empresarial" name="Gestión empresarial" >Gestión empresarial</option>
                               <option value="Electromecánica" name="Electromecánica">Electromecánica</option>
                               <option value="Sistemas computacionales" name="Sistemas computacionales">Sistemas computacionales</option>
                               <option value="Tecnologías de la información y comunicaciones" name="Tecnologías de la información y comunicaciones">Tecnologías de la información y comunicaciones</option>
                               <option value="Logística" name="Logística">Logística</option>
                               
                              
                               </select>
                                
                                

                                <!--<select name="nombre_carrera" class="form-select">
                                <option select>--Elige la carrera--</option>
                                        <option value="Gestión empresarial" name="Gestión empresarial" >Gestión empresarial</option>
                                        <option value="Electromecánica" name="Electromecánica"value="<?php echo $row['nombre_carrera']  ?>">Electromecánica</option>
                                        <option value="Sistemas computacionales" name="Sistemas computacionales"value="<?php echo $row['nombre_carrera']  ?>">Sistemas computacionales</option>
                                        <option value="Tecnologías de la información y comunicaciones" name="Tecnologías de la información y comunicaciones"value="<?php echo $row['nombre_carrera']  ?>">Tecnologías de la información y comunicaciones</option>
                                        <option value="Logística" name="Logística"value="<?php echo $row['nombre_carrera']  ?>">Logística</option>
                                    </select></br>-->
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>