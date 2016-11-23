<?php 
session_start();
if(isset($_SESSION['userdata'])) {
?>
<?php
include_once '../database/config.php';
mysql_select_db('cendana');
$id_det = $_GET['id'];

$det_data = mysql_query("
select  pgw.id_pegawai, 
		pgw.nama_pegawai, 
		pgw.tlp_pegawai, 
		kot.nama_kota, 
		jk.kelamin, 
		pos.nama_posisi 
from tb_pegawai pgw, tb_posisi pos, tb_kota kot, tb_jk jk 
where 
pgw.id_posisi = pos.id_posisi and 
pgw.kota_pegawai=kot.id_kota and 
pgw.jk_pegawai=jk.id_jk and
pgw.id_pegawai='$id_det'") or die(mysql_error());
$detail = mysql_fetch_array($det_data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Pegawai</title>
	<link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
<div class="col-sm-10" style="background-color: gainsboro">
<div class="row">
	<div class="col-sm-5">
		<a href="index.php" style="color: black">
	  		<button type="button" class="btn btn-info" id="kembali">Kembali</button>
	  	</a>

	</div>
</div>
			<h2>Detail Pegawai</h2>
			Nama : <?php echo $detail['nama_pegawai'];?><br>
			No Telepon : <?php echo $detail['tlp_pegawai'];?><br>
			Alamat : <?php echo $detail['nama_kota'];?><br>
			Jenis Kelamain : <?php echo $detail['kelamin'];?><br>
			Posisi : <?php echo $detail['nama_posisi'];?><br>
</div>
<script src="../bootstrap/bootstrap-3.3.7/js/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap/bootstrap-3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>
<?php } else { 
			header("location:login.php");
		} 
?>