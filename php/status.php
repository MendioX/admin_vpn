<?php
include("conexion.php");
$consulta="SELECT * FROM `status_elastix` WHERE id = (SELECT MAX(id) FROM `status_elastix`)";

$resultado = mysqli_query($con,$consulta);

//$valor= array('$resultado['avellaneda'] ','$resultado['belgrano']' ,'$resultado['constitucion']' ,'$resultado['espora']' ,'$resultado['rosales'] ','$resultado['rivadavia'] ','$resultado['interenacional']' );
$status=mysqli_fetch_array($resultado);
mysqli_close($con);


?>