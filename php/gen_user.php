<?php


    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellido'];
    $i=2;
    
    $username_encontrado = FALSE;
    
    
    $username = "";
    $username= substr($nombre, 0, $i);
    $username .= $apellidos;
       
    
    //echo "$username";


?>