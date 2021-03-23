<?php include("db.php"); ?>
<?php


if(isset($_POST['guardar2'])){

        echo 'Guardando...';
        $nombre = $_POST['nombre'];
        
        $consulta = "INSERT INTO categoria(nombre) VALUES ('$nombre')";

        $resultado = mysqli_query($conection, $consulta);
        
        
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
