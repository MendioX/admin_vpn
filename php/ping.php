
 <?php 
 

 $ip = array("192.168.0.1","192.168.2.65","192.168.16.250","192.168.0.300");

   

//$ping= exec("ping -n 1 $ip",$output,$status);
//echo $status;
$j=count($ip);




for ($i=0; $i < $j ; $i++) { 
$cmd= "ping -n 1 ".$ip[$i];
pclose(popen("start /B ". $cmd, "r"));

echo ('<br>');


}






?>
