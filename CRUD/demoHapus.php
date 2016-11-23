<?php
mysql_connect("localhost","root","") or die ("gagal");
mysql_select_db("demodelete");

mysql_query("DELETE FROM contoh WHERE id='$_GET[id]'");
?>
