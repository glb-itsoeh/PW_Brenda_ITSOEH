<?php 
    include("conexion.php");
    $con=conectar();
    //$sql= "SELECT * FROM `alumno` A JOIN `carrera` C ON A.matricula = C.id_carrera";
    $sql="SELECT *  FROM alumno";
    
    $query=mysqli_query($con,$sql);

    //$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulario con php y MYSQL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        </head>

    <style>
        body{
          background-image:url(escuela.jpg);
          background-size: 100%;
        }
        h1 {
          text-align: center;          
          color: white;
          text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }
        table {
          width: 100%;
          border-collapse: separate;
          border-spacing: 3px;
          background: #ffff;   
        }  
    </style>

    <body div class="position-absolute top-50 start-50 translate-middle">
           
                     
                        
                        <div class="col-md-10">
                            <h1>DATOS ALUMNO</h1>
                            <!--Formulario alumno -->
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="matricula" placeholder="matricula">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos">
                                    <!--<input type="text" class="form-control mb-3" name="sexo" placeholder="sexo">-->
                                    <input type="radio" class="form-check-input" name="sexo" value="F"><label> Femenino</label>
                                    <input type="radio" class="form-check-input" name="sexo" value="M"><label> Masculino</label><br><br>
                                    <select name="nombre_carrera" class="form-select">
                                        <option select>--Elige la carrera--</option>
                                        <option value="Gestión empresarial" name="Gestión empresarial">Gestión empresarial</option>
                                        <option value="Electromecánica" name="Electromecánica">Electromecánica</option>
                                        <option value="Sistemas computacionales" name="Sistemas computacionales">Sistemas computacionales</option>
                                        <option value="Tecnologías de la información y comunicaciones" name="Tecnologías de la información y comunicaciones">Tecnologías de la información y comunicaciones</option>
                                        <option value="Logística" name="Logística">Logística</option>
                                    </select></br>
                                    
                                    <input type="submit"class="btn btn-primary"> 
                                    
                                </form><br>
                                <!--Fin del Formulario alumno -->
                        </div>
                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>MATRICULA</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDOS</th>
                                        <th>SEXO</th>
                                        <th>CARRERA</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['matricula']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['sexo']?></th> 
                                                <th><?php  echo $row['nombre_carrera']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['matricula'] ?>" class="btn btn-outline-warning">Actualizar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['matricula'] ?>" class="btn btn-outline-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                    
                        </div>
                     
            
    </body>
</html>