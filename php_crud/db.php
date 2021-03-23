<?php

$conection = mysqli_connect(
    'localhost',//donde se encuentra la base de datos
    'root',//nombre de usuario
    '',//constraseña
    'practicas_crud'//nombre de la base de datos
);
 // Para comprobar que se ha conectado crrectamente
if (isset($conection)){
    //echo "Conectado a la base de datos";
}

?>