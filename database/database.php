<?php
require_once 'config.php';

if ($conn) {
	// echo "Sukses konek";
} else {
	// echo "Gagal konek";
}


mysql_select_db('cendana');

$sql = 'select * from tb_pegawai';

$query = mysql_query($sql);	



?>
<!-- 
1. bikin akun Github
2. finishing modularisasi halaman (include templateing)
3. implementasikan skema design blog entry kemarin ke sql
4. mengisi konten data di SQL nya
5. tampilkan daanya di proyek masing-masing
 -->
</ul>