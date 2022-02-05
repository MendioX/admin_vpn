
 <?php 
 


 $ip= array("192.168.60.250","192.168.45.250","192.168.16.250","192.168.15.250","192.168.15.62","192.168.60.250","192.168.16.250","192.168.15.250","192.168.15.62","192.168.60.250");
 //$ping = exec("ping -n 1 $ip[$i]",$output,$status);

   $status;     

for ($i=0; $i < count($ip); $i++) { 

        $cmd = "ping -n 1 ".$ip[$i];  
        $cmd_2="ping -n 1 ".$ip[$i+1];
        
               
                    $ph=popen("start /B ". $cmd, "r");
                    $ph_2=popen("start /B ". $cmd_2, "r");
                    while (! feof($ph)) { 
                        $s = fgets($ph,256);
                        $cadena_1 .= $s;
                    } 
                    
                    while (! feof($ph_2)) { 
                        $s = fgets($ph_2,256);
                        $cadena_2 .= $s;
                    } 
                        
                    if ( (strpos($cadena_1,"Tiempo de espera agotado")) == true) {
                        $status[$i]= 0;
                     }else{
                         $status[$i]= 1;
                     }
                
                     if ( (strpos($cadena_2,"Tiempo de espera agotado")) == true) {
                        $status[$i+1]= 0;
                     }else{
                         $status[$i+1]= 1;
                     }
          $i++;    
                
        
}
pclose($ph);
pclose($ph_2);
for ($i=0; $i < count($status); $i++) { 
        echo($status[$i]);
}

 



?>
