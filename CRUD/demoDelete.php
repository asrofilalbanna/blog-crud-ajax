<?php
mysql_connect("localhost","root","") or die ("gagal");
mysql_select_db("demodelete");
$nama=mysql_query("select * from contoh");
?>
<style>
.sembunyikan{
 padding:5px;
 text-decoration:none;
 background:#ccc;
 border-radius:4px;
 -moz-border-radius:4px;
 color:#000;
 font:11px bolder Verdana, Geneva, sans-serif;
 margin-left:20px;
 display:none;
 }
#nama{
 margin:10px;
 background:#333;
 width:100%;
 padding:5px;
 color:#fff;
 border-radius:4px;
 -moz-border-radius:4px;
 }
#nama:hover .sembunyikan{
 display:inline;
 }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
var xmlhttp = false;

try {
 xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch (e) {
 try {
  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 } catch (E) {
  xmlhttp = false;
 }
}

if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
 xmlhttp = new XMLHttpRequest();
}



function hapus(key){
 
 var url='hapus.php?id='+key;
 
 xmlhttp.open("GET", url);
 
 
 xmlhttp.send(null);
}


$(document).ready(function()
{

$(".sembunyikan").click(function(){
 $(this).parent("#nama").fadeOut(500);
 });
});
</script>
<div style="margin-left:40%;">
<a href="http://wimplycdesign.blogspot.com" class="sembunyikan" style="position:inherit;display:inline;">Simplycdesign Demo Delete JQUERY & AJAX</a>
<?php
while($nama2=mysql_fetch_array($nama)){
 echo "<div id=\"nama\">$nama2[nama] <a href=\"#\" class=\"sembunyikan\" onclick=\"hapus($nama2[id])\">delete</a></div>";
 }
?>
</div>