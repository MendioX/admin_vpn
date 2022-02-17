<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <title>Ingresar Usuario</title>
    <link rel="stylesheet" href="../css/formStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">


</head>
<body>

<div class="grilla">

    <div class="card">
        <form id="form_in" action="" method="post" >
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
                </select>

            </p>
            
   
            
           
           
             
            <input id="send"  type="submit" name="Enviar">        
                   
            

        </form>
        </div>
        </div>
        
          <?php include("../php/cargarUsuario.php")?>
    
          


</body>
