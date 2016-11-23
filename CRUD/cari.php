<?php 
include_once '../database/config.php';
mysql_select_db('cendana');

$sql = "select pgw.id_pegawai, pgw.nama_pegawai, pgw.tlp_pegawai, kot.nama_kota, jk.kelamin, pos.nama_posisi from tb_pegawai pgw, tb_posisi pos, tb_kota kot, tb_jk jk 
where pgw.id_posisi = pos.id_posisi and pgw.kota_pegawai=kot.id_kota and pgw.jk_pegawai=jk.id_jk";


if ($_POST['search']!=""){
	$search = $_POST['search'];
	$sql .= " and (pgw.nama_pegawai like '%{$search}%' or pos.nama_posisi like '%{$search}%')";
} 


$query = mysql_query($sql);	

while ($data = mysql_fetch_array($query)){
?>

<tr>
	<!-- <td><?php echo $data['id_pegawai']?></td>  -->
	<td><a href="detail.php?id=<?php echo $data['id_pegawai']?>"><?php echo $data['nama_pegawai']?></a></td>
	<td><?php echo $data['tlp_pegawai']?></td> 
	<td><?php echo $data['nama_kota']?></td> 
	<td><?php echo $data['kelamin']?></td> 
	<td><?php echo $data['nama_posisi']?></td>
	<td align="center">
		<a href="update.php?id=<?php echo $data['id_pegawai']?>"><button type="button" class="btn btn-xs btn-warning">Update</button></a>
		<button type="button" class="btn btn-xs btn-danger hapus" id="<?php echo $data['id_pegawai']?>">Hapus</button>
		<!-- <a id="tdelete" title="Hapus"><button  type="button" class="btn btn-xs btn-danger hapus" id="<?php echo $data['id_pegawai']?>">Hapus</button></a> -->
	</td>
</tr>

<?php } ?>