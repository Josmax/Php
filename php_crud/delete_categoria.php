<?php 

include("db.php");

$nombre = $_GET['nombre'];//Guardamos el id 
$consulta = "DELETE FROM categoria WHERE nombre = '$nombre'";
mysqli_query($conection, $consulta); //ejecuto la consulta con la bd

//Controlar que si elimino una categoria los productos de esa categoria sean eliminados

$consulta = "DELETE FROM producto WHERE tipo = '$nombre'";
mysqli_query($conection, $consulta);

header("Location: listado.php");