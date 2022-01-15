<?php

include("conexion.php");




if (isset($_POST['Enviar'])){
     if(strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1){

        
         $n=$_POST['nombre'];
         $a=$_POST['apellido'];
         $e=$_POST['email']; 
         $s=$_POST['sucursal'];
         
        include("gen_user.php");
        include("gen_pw.php");
         $u=$username;
         $p=$password;

switch($s){
    case "Avellaneda":
        $consulta ="INSERT INTO Avellaneda (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;

     case "Alem":
         $consulta ="INSERT INTO Alem (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
         break;

    case "Belgrano":
        $consulta ="INSERT INTO Belgrano (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;

    case "Espora":
        $consulta ="INSERT INTO Espora (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;

    case "Rivadavia":
        $consulta ="INSERT INTO Rivadavia (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;
            
    case "Internacional":
        $consulta ="INSERT INTO Internacional (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;

    case "Rosales":
        $consulta ="INSERT INTO Rosales (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;

    case "Viamonte":
        $consulta ="INSERT INTO Viamonte (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;
            
    case "Viamonte PB":
        $consulta ="INSERT INTO Viamonte_PB (nombre, apellido, email, usuario, pw) VALUES ('$n','$a','$e','$u','$p')";
        break;

    }


         
         $resultado = mysqli_query($con,$consulta);
        if($resultado){
       
        ?>
        
        <h2 class="ok"> usuario guardado con exito!</h2>
        <div id="popup-container">
            <div id="popup">

            <p id="data"><img class="resize"src="../img/sucursal.png" />Sucursal </p>
            <p id="data"><?php echo "$s"?> </p>
            <p id="data"><img class="resize" src="../img/usuario.png" />Usuario </p>
            <p id="data"><?php echo "$u"?> </p>
            <p id="data"><img class="resize" src="../img/pw.png" />Conrtraseña</p>
            <p id="data"><?php echo "$p"?> </p>
            </div>         
          </div>

        <?php
     } else {
        ?>
        
        <h2 class="bad"> ¡Ups, ah ocurrido un error!</h2>
        <?php
    }
}else{
     ?>
        
        <h2 class="bad"> ¡Por Favor Complete los campos!</h2>
        
        <?php
    
}

}
mysqli_close($con);
?>