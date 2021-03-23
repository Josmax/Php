
<?php include("db.php"); ?>
<?php include("includes/header.php") ?>

<br>
<div class="container">
    <h2>Insertar producto:</h2>
    <br>
        <form action="save_crud.php" method="POST">
        
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
            <br>
            <input type="text" name="precio" class="form-control" placeholder="Precio" autofocus>
            
            <br>
            



            <h5>Tipo de producto:</h5>
            <select name="tipo">


            <?php 
                //Consulta a la base de datos para mostrar los datos
                $consulta = "SELECT * FROM categoria";
                $result = mysqli_query($conection, $consulta);
                
                while($categoria = mysqli_fetch_array($result)){?>
                     <tr>
                        <option> <?php echo $categoria['nombre']  ?> </option>
                      
               <?php }  ?>
            </select>
           
            <input type="checkbox" name="checkbox"> <label >Recordar datos</label>
          </div>
          
          <input class="btn btn-primary" type="submit" value="Guardar" name="guardar">
                  
        </form>
      </div>
    </div>
   
<?php include("includes/footer.php") ?>
 
 