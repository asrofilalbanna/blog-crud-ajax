<?php 
include_once '../database/config.php';

$nama = $_POST['Nama'];
$jk = $_POST['jk'];
$posisi = $_POST['Posisi'];
$kota = $_POST['Kota'];
$tlpn = $_POST['Telepon'];

$id = md5(date('ymdhms').rand());

$sql = "insert into tb_pegawai(id_pegawai, nama_pegawai, tlp_pegawai, kota_pegawai, jk_pegawai, id_posisi, ket) 
		values('$id', '$nama', '$tlpn', '$kota', '$jk', '$posisi', '1')";

mysql_query($sql);


?>