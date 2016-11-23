<?php 
include_once '../database/config.php';
$id     = $_POST['id_peg'];
$nama   = mysql_escape_string($_POST['nama']);
$jk     = $_POST['jk'];
$posisi = $_POST['posisi'];
$kota   = $_POST['kota'];
$tlpn   = $_POST['tlpn'];


$sql = "UPDATE tb_pegawai SET nama_pegawai='{$nama}', tlp_pegawai='{$tlpn}', kota_pegawai='{$kota}', jk_pegawai='{$jk}', id_posisi='{$posisi}' WHERE id_pegawai='{$id}'";
// echo $sql;
// exit();
mysql_query($sql);
header("location:index.php");	 


?>