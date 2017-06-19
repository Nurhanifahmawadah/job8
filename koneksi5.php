<html>
<body bgcolor="#00FFFF">
<table border="l">
<tr bgcolor="#FF0000">
<td>No</td>
<td>Nama</td>
<td>Alamat</td>
</tr>
<?php
include_once("koneksi.php");
$selectview=mysql_query("select id, nama, alamat from tamu order by id,nama asc");
while($data=mysql_fetch_array($selectview))
{echo"<tr>
<td>$data[0]</td>
<td>$data[1]</td>
<td>$data[2]</td>
</tr>";
}
?>
</table>
</body>
</html>