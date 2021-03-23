<?php include("db.php"); ?>
<?php include("includes/header.php") ?>

<br>

    <div class="container">
    <h2>Insertar categoria:</h2>
    <br>
        <form action="save_categoria.php" method="POST">
        
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre de la categoria" autofocus>

            <br>
          </div>
          
          <input class="btn btn-primary" type="submit" value="Guardar" name="guardar2">

        </form>
      </div>
    </div>




<?php include("includes/footer.php") ?>
 
 