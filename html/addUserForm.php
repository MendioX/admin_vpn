<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <title>Ingresar Usuario</title>
    <link rel="stylesheet" href="../css/formStyle.css">


</head>
<body>

        <form class="form_in" action="" method="post" >
            <h3>Ingreso Informacion Operador</h3>
            <input id="name" type="text" name="nombre" placeholder="Nombre">
            <input id="surname" type="text" name="apellido"  placeholder="Apellido">
            <input id="email" type="email" name="email"  placeholder="Email">
           
            <p>
                <select name="sucursal" id="sucursal">
                    <option>Avellaneda</option>
                    <option>Espora</option>
                    <option>Rosales</option>
                    <option>Belgrano</option>
                    <option>Alem</option>
                    <option>Rivadavia</option>
                    <option>Internacional</option>
                    <option>Constitucion</option>
                    <option>Vaimonte</option>
                    <option>Viamonte PB</option>
                </select>

            </p>
            
    <!--
            <input id="user" type="text" name="user" value="<?php include("../php/gen_user.php") ?>" placeholder="Usuario" >
            <input id="password" type="text" name="password" value="<?php include("../php/gen_pw.php")?>" placeholder="Contraseña" >
           
           
            <input id="send" type="button" method="get" name="Refresh" value="user & pw">      
            -->     
            <input id="send"  type="submit" name="Enviar">        
                   
            

        </form>
        
          <?php include("../php/cargarUsuario.php")?>
    
          


</body>
