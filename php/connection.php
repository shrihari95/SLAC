<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db = 'mydatabase';

$conn = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
?>