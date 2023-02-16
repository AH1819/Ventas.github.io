<?php
$id = $_POST['idprod'];
$name = $_POST['nombre'];
$valor = $_POST['precio'];
$existencia = $_POST['exist'];

include('conexion.php');
$con = conectaDB();
$sql ="insert into td_productos values(".$id.",'".$name."',".$valor.",".$existencia.")";
//echo $sql;
 mysqli_query($con,$sql);  

 header("location:../ventas.php");
 
?>