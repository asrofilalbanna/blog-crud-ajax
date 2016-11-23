<?php 
error_reporting();

$host     = 'localhost';
$username = 'root';
$password = '';

$conn = mysql_connect($host, $username, $password);
mysql_select_db('cendana');
?>