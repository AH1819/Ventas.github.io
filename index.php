<html>

<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="contenedor">
    <form action="crud/insert.php" class="formulario" method="POST">
        <input type="text" name="idprod" class="input">
        <input type="text" name="nombre" class="input">
        <input type="text" name="precio" class="input">
        <input type="text" name="exist" class="input"><br>
        <input type="submit" value="Registrar" class="button">
    </form>
    <?php
    include('crud/conexion.php');
    $con = conectaDB();
    $sql = "select id_prod,nombre,precio from td_productos";
    $resultado = mysqli_query($con,$sql);

    echo "<table class = 'tabla'> <tbody>";
    echo "<thead>";
    echo "<th><font color = 'white'>Nombre</font></th>";
    echo "<th><font color = 'white'>Precio</font></th>";
    echo "<th><font color = 'white'>Eliminar</font></th>";
    echo "</thead>";

    while($fila = mysqli_fetch_row($resultado)){
			echo "<tr>";
			echo "<td><font color = 'black'>".$fila[1]."</font></td>";
			echo "<td><font color = 'black'>".$fila[2]."</font></td>";
            echo "<td class = 'eliminar'><a href = 'crud/eliminar.php?idp=".$fila[0]."' ><img src ='source/iconoeliminar.png'></a></td>";
			echo "</tr>";
		}
		echo "</table>";
    ?>
</body>

</html>