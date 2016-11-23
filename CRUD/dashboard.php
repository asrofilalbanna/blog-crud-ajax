<?php session_start();?>

<?php 
if(isset($_SESSION['userdata'])) {
?>
	<h1>Selamat datang!</h1>

	<a href="logut.php">Keluar</a>

<?php } else { ?>

	Maaf dilarang masuk. <a href="login.php">Login</a>

<?php } ?>
