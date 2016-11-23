<?php
mysql_connect("localhost","root","") or die ("gagal");
mysql_select_db("demodelete") or die("error pilih db");

$title=$_POST["title"];
// $title = "hafi";
  
$result=mysql_query("SELECT * FROM contoh where nama like '%$title%'");
$found=mysql_num_rows($result);

if($title==""){
	echo "<li>Find your key</li>";
} else {
	if($found>0){
		while($row=mysql_fetch_array($result)){
		echo $row['nama'];
		}   
	}else{
		echo "<li>No Tutorial Found</li>";
	}
}
// ajax search
?>