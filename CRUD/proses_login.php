<?php session_start();
include_once '../database/config.php';
$user 	= $_POST['user'];
$pass 	= $_POST['pass'];

$query	= mysql_query("SELECT * FROM tb_login WHERE username = '{$user}'");
if(mysql_num_rows($query) == 1){
	$dataLoginDB 	= mysql_fetch_array($query);

	if ($pass == $dataLoginDB['password']){
		$_SESSION['userdata'] = $dataLoginDB;
		header('location:index.php');
	} else {
		header('location:login.php');
	}

}else {
	header('location:login.php');
}
?>