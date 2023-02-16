<?php
$id = $_GET['idp'];

include('conexion.php');
$con = conectaDB();
$sql ="delete from td_productos where id_prod = ".$id;
//echo $sql;
 mysqli_query($con,$sql);  

 header("location:../ventas.php");
 
?>