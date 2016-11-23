<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body style="margin: 250px;">
	<div class="col-md-3 col-md-offset-4" style="background-color: darkgrey">
	<form action="proses_login.php" method="POST"><br>
		<input class="form-control" type="text" name="user" autocomplete="off" placeholder="Username"><br>
		<input class="form-control" type="password" name="pass" autocomplete="off" placeholder="****"><br><br>
		<div style="margin-top: -18px; margin-left: 26px;">
		<input type="submit" value="Login" class="btn btn-success dropdown-toggle"> 
		<button type="reset" value="Login" class="btn btn-danger dropdown-toggle">Reset</button>
		</div>
		<br>
	</form>
	</div>

<script src="../bootstrap/bootstrap-3.3.7/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/script.js" crossorigin="anonymous"></script>
</body>
</html>