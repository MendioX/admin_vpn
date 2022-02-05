<?php

$ip= array("192.168.60.250","192.168.45.250","192.168.16.250","192.168.15.250","192.168.15.62","192.168.60.250","192.168.16.250","192.168.15.250","192.168.15.62","192.168.60.250");
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

?>