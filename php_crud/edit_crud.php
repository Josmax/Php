<?php include("db.php"); 


if(isset($_GET['id'])){
    $id = $_GET['id'];//Guardamos el id 
   
    $consulta = "SELECT * FROM producto WHERE id = $id";
    $result = mysqli_query($conection, $consulta); //ejecuto la consulta con la bd

    $producto = mysqli_fetch_array($result);
    $nombre = $producto['nombre'];
}
//Despues de presionar el boton de editar

if(isset($_POST['editar'])){

    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    

    $consulta = "UPDATE producto set nombre = '$nombre' WHERE id = $id";
    mysqli_query($conection, $consulta);
    
    header("Location: listado.php"); //Redirección
}       

?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <h2>Modificar producto con ID: <?php echo $id ?></h2>
    <br>
        <form action="edit_crud.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" placeholder="Modificar...">
          </div>

                <input class="btn btn-primary" type="submit" value="Editar" name="editar">

        </form>
      </div>
    </div>


<?php include("includes/footer.php") ?>