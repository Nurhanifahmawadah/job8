<html>
<body bgcolor="#00FFFF">
<?php
include_once("koneksi.php");
$update=mysql_query("update tamu set nama='STEKOM SEMARANG' where id=l");
if($update)
{echo"berhasil mengupdate data pada tabel tamu";}
else
{echo"gagal mengupdate data";}
?>
</body>
</html>