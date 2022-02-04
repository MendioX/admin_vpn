
 <?php 
 


$ip= array("192.168.60.250","192.168.45.250","192.168.16.250","192.168.15.250","192.168.15.62" );
//$ping = exec("ping -n 1 $ip[$i]",$output,$status);

        echo("asdfasd \"\" ");

for ($i=0; $i < count($ip); $i++) { 

        $cmd = "ping -n 1 ".$ip[$i];  
        
        
                if (substr(php_uname(), 0, 7) == "Windows"){
                    $ph=popen("start /B ". $cmd, "r");
                    while (! feof($ph)) { 
                        $s = fgets($ph,256);
                        echo ('<pre>');
                        echo $s;
                        echo ('</pre>');
                    } 
                        pclose($ph);
                } 
              
                
        
}


 



?>
