<?php

$ip= array("192.168.60.250","192.168.45.250","192.168.16.250","192.168.15.250","192.168.15.62","192.168.60.250","192.168.16.250","192.168.15.250","192.168.15.62","192.168.60.250");

$ping = exec("ping -n 1 $ip[0]",$output,$status);
 echo $status;

 $ping = exec("ping -n 1 $ip[1]",$output,$status);
 echo $status;

 $ping = exec("ping -n 1 $ip[2]",$output,$status);
 echo $status;

 $ping = exec("ping -n 1 $ip[3]",$output,$status);
 echo $status;

 $ping = exec("ping -n 1 $ip[4]",$output,$status);
 echo $status;

 $ping = exec("ping -n 1 $ip[5]",$output,$status);
 echo $status;

 $ping = exec("ping -n 1 $ip[6]",$output,$status);
 echo $status;

 $ping = exec("ping -n 1 $ip[7]",$output,$status);
 echo $status;




?>