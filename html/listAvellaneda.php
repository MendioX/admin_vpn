<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/listStyle.css">
</head>
<body>
    <?php include("../php/list_user.php") ?>

<h1>Usuarios Avellaneda</h1>

<table id="customers">
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Usuario</th>
    <th>Contraseña</th>
    <th></th>
    <th></th>
  </tr>
  <?php 
  while($mostrar=mysqli_fetch_array($resultado)){
   ?>
  <tr>
    <td><?php echo $mostrar['nombre'] ?></td>
    <td><?php echo $mostrar['apellido'] ?></td>
    <td><?php echo $mostrar['email'] ?></td>
    <td><?php echo $mostrar['usuario'] ?></td>
    <td><?php echo $mostrar['pw'] ?></td>
    <td><img class="resize" src="../img/delete.png" /></td>
    <td><img class="resize" src="../img/edit.png" /></td>
  </tr>
  <?php
  

}
?>
  
</table>

</body>
</html>