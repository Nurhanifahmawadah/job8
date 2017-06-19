<html>
<head>
<title>Contoh Koneksi Database</title>
</head>
<body bgcolor="#00FFFF">
<b>
<?php
//simpan sebagai file koneksi dengan nama "db_connect.php"
$host='localhost'; 
$username='root';
$password='';
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
{echo"Koneksi server berhasil <br><br>";}
else
{echo"gagal koneksi ke server <br><br>";}

$database='db_online';
$mydb=mysql_select_db($database,$koneksi);
if($mydb)
{echo"Berhasil Memilih Database";}
else
{echo"Tidak Daapat Memilih Database";}
?>
</b>
</body>
</html>