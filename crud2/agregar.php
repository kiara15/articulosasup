<html>
    <head>
        <title>AGREGAR</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <h1>Agregar Nuevo Artículo científico</h1>

        <?php 

            if(isset($_POST['enviar'])){
                $titulo=$_POST['titulo'];
                $autores=$_POST['autores'];
                $revista=$_POST['revista'];
                $base=$_POST['base'];
                $fecha=$_POST['fecha'];
                $doi=$_POST['doi'];
                $observa=$_POST['observa'];
                $archivo=$_POST['archivo'];

                include("conexion.php");
                //insert into articulos(titulo,fecha,diario,autor)
                //values($titulo,$fecha,$diario,$autor)

                $sql="insert into articulos(titulo,autores,revista, base, fecha,doi,observa) 
            values('".$titulo."','".$autores."','".$revista."','".$base."','".$fecha."','".$doi."','".$observa."') ";

            $resultado=mysqli_query($conexion, $sql);

            if($resultado){
                //los datos ingresaron a la bd
                echo"<script language='JavaScript'> alert('Los datos fueron ingresados correctamente a la BD');
                    location.assign('index.php');
                    </script>";

            }else{
                //los datos NO ingresaron a la bd
                echo"<script language='JavaScript'>
                alert('Los datos NO fueron ingresados
                correctamente a la BD');
                location.assign('index.php');
                </script>";
            }

            mysqli_close($conexion);

            }else{

        ?>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>Título:</label>
            <input type="text" name="titulo"><br>
            <label>Autores:</label>
            <input type="text" name="autores" placeholder="Separar por comas"><br>
            <label>Revista:</label>
            <input type="text" name="revista"><br>
            <label>Base de datos:</label>
            <input type="text" name="base"><br>
            <label>Fecha:</label>
            <input type="date" name="fecha"><br>
            <label>DOI:</label>
            <input type="text" name="doi"><br>
            <label>Observación:</label>
            <input type="text" name="observa"><br>
            <label>URL Archivo:</label>
            <input type="text" name="archivo"><br>
            <input type="submit" name="enviar" value="AGREGAR">
            <a href="index.php">Regresar</a>
        </form>
        <?php
            }

        ?>

    </body>
</html>