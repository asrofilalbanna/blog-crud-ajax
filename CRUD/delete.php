<?php 
session_start();
if(isset($_SESSION['userdata'])) {
?>
<?php

include_once '../database/config.php';

$id_del = $_GET['id'];

mysql_query("delete from tb_pegawai where id_pegawai= '$id_del'") or die(mysql_error());


?>
<?php } else { 
			header("location:login.php");
		} 
?>