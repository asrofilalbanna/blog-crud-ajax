<?php include_once '../database/config.php';?>
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
<?php 
mysql_select_db('cendana');

$id_upd = $_GET['id'];

$dta_pegawai = mysql_query("select pgw.id_pegawai, pgw.nama_pegawai, pgw.tlp_pegawai, kot.nama_kota, jk.kelamin, pos.nama_posisi, pgw.id_posisi, pgw.jk_pegawai from tb_pegawai pgw, tb_posisi pos, tb_kota kot, tb_jk jk where pgw.id_posisi = pos.id_posisi and pgw.kota_pegawai=kot.id_kota and pgw.jk_pegawai=jk.id_jk and pgw.id_pegawai='$id_upd'");
$pegawai = mysql_fetch_array($dta_pegawai);

$dta_kota = mysql_query("select * from tb_kota");

$dta_posisi= mysql_query("select * from tb_posisi");

?>
<div class="container">
	<div class="col-sm-10" style="background-color: gainsboro">
	<h1> Form Update data Pegawai</h1><br>
		<form action="proses_update.php" method="POST" accept-charset="utf-8" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="nama" value="<?php echo $pegawai['nama_pegawai'];?>">
				</div>	
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Telepon</label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="tlpn" value="<?php echo $pegawai['tlp_pegawai'];?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputKota" class="col-sm-2 control-label">Kota Asal</label>
				<div class="col-sm-10">
					<select name="kota" class="form-control">
						<?php
						while ($kota = mysql_fetch_array($dta_kota)){
						?>
						<option <?php if($kota['nama_kota']== $pegawai['nama_kota']){ echo "selected='selected'";}?> value="<?php echo $kota['id_kota']?>"><?php echo $kota['nama_kota']?></option>
						<?php } ?>
					</select>
				</div>	
			</div>
			<div class="form-group">
				<label for="inputName" class="col-sm-2 control-label">Jenis Kelamin</label>
				<div class="col-sm-10">
					<div class="input-group-addon" style="background-color: lightblue">
						<input type="radio" name="jk" value="1" <?php if($pegawai['jk_pegawai'] == 1){echo "checked=checked";}?>}>Laki-laki
					</div>
					<div class="input-group-addon" style="background-color: lightpink">
						<input type="radio" name="jk" value="2" <?php if($pegawai['jk_pegawai'] == 2){echo "checked=checked";}?>>Perempuan
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPosisi" class="col-sm-2 control-label">Posisi</label>
				<div class="col-sm-10">
					<select name="posisi" class="form-control">
						<?php
						while ($posisi = mysql_fetch_array($dta_posisi)){
						?>
						<option <?php if($posisi['id_posisi']==$pegawai['id_posisi']){ echo "selected='selected'";}?> value="<?php echo $posisi['id_posisi']?>"><?php echo $posisi['nama_posisi']?></option>
						<?php } ?>
					</select>
				</div>	
			</div>
			<tr>
				<td><input name="id_peg" type="hidden" value="<?php echo $pegawai['id_pegawai'];?>"></td>
			</tr>
			<div class="row">
				<div class="col-sm-5">
					<a href="index.php" style="color: black">
				  		<button type="button" class="btn btn-info" id="kembali">Kembali</button>
				  	</a>
				  	<button type="submit" class="btn btn-success">Update</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</div><br>
		</form>
	</div>
</div>







<script src="../bootstrap/bootstrap-3.3.7/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
<?php } else { 
			header("location:login.php");
		} 
?>