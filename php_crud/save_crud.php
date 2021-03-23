<?php include("db.php"); ?>
<?php


if(isset($_POST['guardar'])){

        echo 'Guardando...';
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];
        
        echo $precio;
        echo $tipo;

        $consulta = "INSERT INTO producto(nombre, precio, tipo) VALUES ('$nombre', '$precio', '$tipo')";

        $resultado = mysqli_query($conection, $consulta);
        

        $consulta2 = "INSERT INTO categoria(tipo) VALUES ('$tipo')";
        $resultado2 = mysqli_query($conection, $consulta2);
        
        if(!$resultado){
            
            echo 'Fallo al introducir los datos';
        }
        header("Location: index.php"); //Redirección
    }       
else{
    echo 'No guardando...';
}

mysqli_close($conection);

?>
