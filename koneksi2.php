<html>
<body bgcolor="#00FFFF">
<?php
include_once("koneksi.php");
$tabel=mysql_query("CREATE TABLE tamu (
id INT NOT NULL,
nama VARCHAR (30) NOT NULL,
alamat VARCHAR (30) NOT NULL,
email VARCHAR (30) NOT NULL,
Komentar VARCHAR (30) NOT NULL,
PRIMARY KEY(id))");
if($tabel)
{echo"berhasil membuat tabel tamu melalui script php";}
else
{echo"gagal membuat tabel";}
?>
</body>
</html>