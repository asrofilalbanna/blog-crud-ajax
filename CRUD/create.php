<?php 
session_start();
if(isset($_SESSION['userdata'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

</head>
<body style="margin-top: 10px;">
<div class="container">
	<?php include_once '../database/config.php';?>

<div class="col-sm-10" style="background-color: gainsboro">
<h1> Form tambah Data Pegawai</h1><br>
<form id="pegawaiForm" method="post" accept-charset="utf-8" class="form-horizontal">
<div class="form-group">
	<label for="inputName" class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		<input class="form-control" placeholder="Name" type="text" id="nama" name="Nama" autocomplete="off"><br>
	</div>	
	<label for="inputTelepon" class="col-sm-2 control-label">Telepon</label>
	<div class="col-sm-10">
		<input class="form-control" placeholder="+62878000xxx" type="text" id="telepon" name="Telepon" autocomplete="off">
	</div>
</div>
<div class="form-group">
	<label for="inputKota" class="col-sm-2 control-label">Kota</label>
	<div class="col-sm-10">
		<select name="Kota" class="form-control" id="kota">
			<?php
			$sql = mysql_query('select * from tb_kota');
			while ($data = mysql_fetch_array($sql)){
			?>
			<option value="<?php echo $data['id_kota'];?>"><?php echo $data['nama_kota']?></option>
			<?php } ?>
		</select>
	</div>	
</div>
<div class="form-group">
	<label for="inputPosisi" class="col-sm-2 control-label">Posisi</label>
	<div class="col-sm-10">
		<select name="Posisi" class="form-control" id="posisi">
			<?php
			$sql = mysql_query('select * from tb_posisi');
			while ($data = mysql_fetch_array($sql)){
			?>
			<option value="<?php echo $data['id_posisi'];?>"><?php echo $data['nama_posisi']?></option>
			<?php } ?>
		</select>
	</div>	
</div>
<div class="form-group">
	<label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>
	<div class="col-sm-10">
		<div class="input-group-addon" style="background-color: lightblue">
		<input type="radio" name="jk" value='1' id="jk">Laki-laki
		</div>
		<div class="input-group-addon" style="background-color: lightpink">
		<input type="radio" name="jk" value='2' id="jk">Perempuan
		</div>
	</div>
</div>	
<br>
<div class="row">
	<div class="col-sm-5">
		<a href="index.php" style="color: black">
	  		<button type="button" class="btn btn-info" id="kembali">Kembali</button>
	  	</a>
	  	<button type="submit" class="btn btn-success">Tambah</button>
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
</div>
</form>

<br>

</div><!-- div col-sm -->
</div><!-- div container -->







<script src="../bootstrap/bootstrap-3.3.7/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/script.js" crossorigin="anonymous"></script>

</body>
</html>
<?php } else { 
			header("location:login.php");
		} 
?>