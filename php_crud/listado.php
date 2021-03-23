<?php include("includes/header.php") ?>
<?php include("db.php") ?>

<body>
<div class="container">
        <table class="table table-bordered">
            <thead>
                
                <tr>
                    <br>
                    <h2>Listado de productos:</h2>
                    <br>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                //COnsulta a la base de datos para mostrar los datos
                $consulta = "SELECT * FROM producto";
                $result = mysqli_query($conection, $consulta);
                
                while($producto = mysqli_fetch_array($result)){?>
                     <tr>
                        <td> <?php echo $producto['nombre']  ?> </td>
                        <td> <?php echo $producto['precio']  ?> </td>

                        <td> <?php echo $producto['tipo']  ?></td>
                        <td> 
                            <a href="edit_crud.php?id=<?php echo $producto['id']  ?>"  class="btn btn-primary">
                                Modificar
                            </a>
                            <a href="delete_crud.php?id=<?php echo $producto['id']  ?>"  class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                     </tr>   
               <?php }  ?>
            </tbody>
            
        </tabe>
    </div>
   
<!-- PROBANDO -->
    <div class="container">
        <table class="table table-bordered">
            <thead>
                
                <tr>
                    <br>
                    <h2>Listado de categorias:</h2>
                    <br>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                //COnsulta a la base de datos para mostrar los datos
                $consulta = "SELECT * FROM categoria";
                $result = mysqli_query($conection, $consulta);
                
                while($categoria = mysqli_fetch_array($result)){?>
                    <!-- Consulta para saber la cantidad de productos-->
                    <?php $nombre = $categoria['nombre'];
                     
                        $consulta2 = "SELECT * FROM producto WHERE tipo = '$nombre'";
                        $result2 = mysqli_query($conection, $consulta2);

                        $cantidad = mysqli_num_rows($result2);?>
                    
                     <tr>
                        <td> <?php echo $categoria['nombre']  ?> </td>
                       
                        <td> <?php echo $cantidad; ?>
                        
                        
                        </td>

                        <td> 
                            <a href="edit_crud.php?id=<?php echo $categoria['id']  ?>"  class="btn btn-primary">
                                Modificar
                            </a>
                            <a href="delete_categoria.php?nombre=<?php echo $categoria['nombre']  ?>"  class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                     </tr>   
               <?php }  ?>
            </tbody>
            
        </tabe>
    </div>

 
</body>
