<?php
include("conexion.php");
?>
<html>
<head>
<title>EDITAR</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

<?php
    if(isset($_POST['enviar'])){
        // aquí entra cuando presiona el botón enviar
            $id=$_POST['id'];
            $titulo=$_POST['titulo'];
            $autores=$_POST['autores'];
            $revista=$_POST['revista'];
            $base=$_POST['base'];
            $fecha=$_POST['fecha'];
            $doi=$_POST['doi'];
            $observa=$_POST['observa'];
            $archivo=$_POST['archivo'];
            
        //update articulos set 
        //titulo=$titulo, fecha=$fecha, diario=$diario, autor=$autor where id=$id

        $sql="update articulos set titulo='".$titulo."', autores='".$autores."', revista='".$revista."',base='".$base."', fecha='".$fecha."', doi='".$doi."', observa='".$observa."', archivo='".$archivo."' where id='".$id."'";
        $resultado=mysqli_query($conexion, $sql);

        if($resultado){
            echo "<script language='JavaScript'>
            alert('Los datos se actualizaron correctamente');
            location.assign('index.php');
            </script>";
            
        }else{
            echo "<script language='JavaScript'>
            alert('Los datos NO se actualizaron correctamente');
            location.assign('index.php');
            </script>";
        }

        mysqli_close($conexion);

        php_egg_logo_guid:3423;

    }else{
        // aquí entra cuando NO presiona el botón enviar
        $id=$_GET['id'];
        $sql="select*from articulos where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);
        
        $fila=mysqli_fetch_assoc($resultado);
        $titulo=$fila["titulo"];
        $autores=$fila["autores"];
        $revista=$fila["revista"];
        $base=$fila["base"];
        $fecha=$fila["fecha"];
        $doi=$fila["doi"];
        $observa=$fila["observa"];
        $archivo=$fila["archivo"];

        mysqli_close($conexion);
        
?>

    <h1>Editar Artículo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Título:</label>
        <input type="text" name="titulo"
        value="<?php echo $titulo; ?>"<br>
        <label>Autores:</label>
        <input type="text" name="autores"
        value="<?php echo $autores; ?>"<br>
        <label>Revista:</label>
        <input type="text" name="revista"
        value="<?php echo $revista; ?>"<br>
        <label>Base:</label>
        <input type="text" name="base"
        value="<?php echo $base; ?>"<br>
        <label>Fecha:</label>
        <input type="date" name="fecha"
        value="<?php echo $fecha; ?>"<br>
        <label>DOI:</label>
        <input type="text" name="doi"
        value="<?php echo $doi; ?>"<br>
        <label>Observación:</label>
        <input type="text" name="observa"
        value="<?php echo $observa; ?>"<br>
        <label>URL Archivo:</label>
        <input type="text" name="archivo"
        value="<?php echo $archivo; ?>"<br>

        <input type="hidden" name="id"
        value="<?php echo $id; ?>">

        <input type="submit" name="enviar" value="ACTUALIZAR">
        <a href="index.php">Regresar</a>
    </form>

    <?php
        }
    ?>
</body>
</html>