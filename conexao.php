<?php
$host = "msql-www";
$user = "root";
$pass = "123456";
$database = "wwww";
$port = 3306;


$connection = mysql_connect ($host, $user, $pass, $database) or die (mysql_error());
mysql_select_db ($database) or die (mysql_error()); 
?>