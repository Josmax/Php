<?php 

include("db.php");

$id = $_GET['id'];//Guardamos el id 
$consulta = "DELETE FROM producto WHERE id = $id";
mysqli_query($conection, $consulta); //ejecuto la consulta con la bd

header("Location: listado.php");