<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Artículos Científicos</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estás seguro?, se eliminarán los datos');
        }
    </script>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <table>
            <tr>
                <th colspan="6"><h1>Lista de Artículos</h1></th>
            <tr>
            <td>
            <label>Autores:</label>
            <input type="text" name="autores"><br>
            </td>
            <td>
            <label>Revista:</label>
            <input type="text" name="revista"><br>
            </td>
            <td>
            <label>Base:</label>
            <input type="text" name="base"><br>
            </td>
            <td>
            <label>Título:</label>
            <input type="text" name="titulo"><br>
            </td>
            <td>
            <input type="submit" name="buscar" value="BUSCAR">
            </td>
            <td>
            <a href="index.php">Mostrar todos los artículos</a>
            </td>
            <td>
            <a href="agregar.php">Nuevo Artículo</a>
            </td>
            </tr>
        </table>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autores</th>
                <th>Revista</th>
                <th>Base de Datos</th>
                <th>Fecha</th>
                <th>DOI </th>
                <th>Observación</th>
                <th>Ver Archivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_POST['buscar'])){
                    //MOSTRAR LA BÚSQUEDA

                    $titulo = $_POST['titulo'];
                    $autores = $_POST['autores'];
                    $revista = $_POST['revista'];
                    $base = $_POST['base'];

                    if(empty($_POST['autores']) && empty($_POST['revista']) && empty($_POST['base']) && empty($_POST['titulo'])){
                        echo "<script language='JavaScript'> alert('No se ingresaron datos');
                        location.assign('index.php');
                        </script>";
                    }else{
                        if(empty($_POST['autores'])){
                            $sql= "select * from articulos where revista like '%".$revista."%' and base like '%".$base."%' and titulo like '%".$titulo."%'" ;
                        }

                        if(empty($_POST['revista'])){
                            $sql= "select * from articulos where autores like '%".$autores."%' and base like '%".$base."%'and titulo like '%".$titulo."%'";
                        }

                        if(empty($_POST['base'])){
                            $sql= "select * from articulos where autores like '%".$autores."%' and revista like '%".$revista."%'and titulo like '%".$titulo."%'";
                        }
                        if(empty($_POST['titulo'])){
                            $sql= "select * from articulos where autores like '%".$autores."%' and revista like '%".$revista."%'and base like '%".$base."%'";
                        }

                        if(!empty($_POST['autores']) && !empty($_POST['revista'])  && !empty($_POST['base']) && !empty($_POST['titulo'])){
                           $sql = "select * from articulos where autores like '%".$autores."%' and revista like '%".$revista."%' and base like '%".$base."%'and titulo like '%".$titulo."%'";
                        }

                    }

                    $resultado = mysqli_query($conexion, $sql);
                    while ($filas=mysqli_fetch_assoc($resultado)){
                        ?>
                        <td><?php echo $filas['id'] ?> </td>
                            <td><?php echo $filas['titulo'] ?></td>
                            <td><?php echo $filas['autores'] ?></td>
                            <td><?php echo $filas['revista'] ?></td>
                            <td><?php echo $filas['base'] ?></td>
                            <td><?php echo $filas['fecha'] ?></td>
                            <td><?php echo $filas['doi'] ?></td>
                            <td><?php echo $filas['observa'] ?></td>
                            <td>
                                <?php echo"<a href='".$filas['archivo']."'>VER ARCHIVO</a>"; ?>
                            </td>   
                            <td>
                            <?php echo"<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"; ?>
                             -
                            <?php echo"<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                            </td>
                        </tr> 

            <?php
                    }
                }else{
                    //MOSTRAR TODOS LOS ARTÍCULOS
                    $sql="select * from articulos";
                    $resultado=mysqli_query($conexion, $sql);
                    while($filas=mysqli_fetch_assoc($resultado)){
            ?>
                        <tr>
                            <td><?php echo $filas['id'] ?> </td>
                            <td><?php echo $filas['titulo'] ?></td>
                            <td><?php echo $filas['autores'] ?></td>
                            <td><?php echo $filas['revista'] ?></td>
                            <td><?php echo $filas['base'] ?></td>
                            <td><?php echo $filas['fecha'] ?></td>
                            <td>
                                <?php echo"<a href='".$filas['doi']."'>VER DOI</a>"; ?>
                            </td>
                            <td><?php echo $filas['observa'] ?></td>
                            <td>
                                <?php echo"<a href='".$filas['archivo']."'>VER ARCHIVO</a>"; ?>
                            </td>
                            <td>
                            <?php echo"<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"; ?><br>
                             -
                            <?php echo"<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                            </td>
                        </tr> 
                
                    <?php
                        }
                    }
                    ?>
            
        </tbody>

    </table>
</body>
</html>