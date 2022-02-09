<?php

$ip= array("192.168.45.250","192.168.60.198","192.168.20.250","192.168.40.250","192.168.16.250","192.168.0.250","192.168.15.250","192.168.15.62");
$status;
for ($i=0; $i < count($ip); $i++) { 
   
    $cmd = "ping -n 1 ".$ip[$i];
    $ph=popen("start /B ". $cmd, "r");
    
    while (! feof($ph)) { 
        $s = fgets($ph,250);
        $cadena.= $s;
    } 
        //echo $cadena;
    
    
    if ( (strpos($cadena,"Tiempo de espera agotado"))== true) {
       // echo "offline";
       $status[$i]= FALSE;
    }else{
        $status[$i]= TRUE;
        //echo "inline";    
    }
    
    
   
pclose($ph);
unset($s);
unset($cadena);


}

include("conexion.php");
$DateAndTime = date('Y-m-d h:i:s a', time());  

 $consulta = "INSERT INTO status_elastix (alem, avellaneda, belgrano, constitucion, espora , rosales, rivadavia, interenacional, fecha) VALUES ('$status[0]','$status[1]','$status[2]','$status[3]','$status[4]','$status[5]','$status[6]','$status[7]','$DateAndTime')";

 $resultado = mysqli_query($con,$consulta);
 mysqli_close($con);
 
?>