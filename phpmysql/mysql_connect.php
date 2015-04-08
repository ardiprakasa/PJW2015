<?php 
$host="localhost";
$user="root";
$password="";
$db="data_tamu";

$link=mysql_connect($host,$user,$password);

mysql_select_db($db,$link);
?>