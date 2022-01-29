<!DOCTYPE html>
<head>
</head>    
<body>

<?php

$ip= "192.168.60.250";
$ping= exec("ping -n 1 $ip",$output,$status);
//echo $status;

if ($status==0) {
    
    echo  '
    
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
    width="20" height="20" viewBox="0 0 120 120">
 <circle cx="60" cy="60" r="50"
         fill="green" />
</svg> ';

}else{
echo '
<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
     width="20" height="20" viewBox="0 0 120 120">
  <circle cx="60" cy="60" r="50"
          fill="red" />
</svg> ';}

?>

<body>