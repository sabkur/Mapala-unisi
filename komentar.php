<?php
require_once "koneksi.php";
$query = "select nama, isi_komentar,tgl_post from komentar where id_berita=$id_berita";
$runquery = mysql_query($query);

while ($result = mysql_fetch_array($runquery))
{

$nama_komentar = $result['nama'];
$isikomentar = $result['isi_komentar'];
$tanggal = $result['tgl_post'];

print "<i> Komentar pada $tanggal </i><br> Nama : $nama_komentar <br> $isikomentar <hr>" ;

}
?>

<html>
<body><br>
<b>Isi Komentar :</b>
<form action="tambah_komentar.php" method="get">
		<input type=hidden name=id_berita value="<?php echo $id_berita ?>">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td><input type=text name=nama></td>
		</tr>
		<tr>
			<td>Komentar</td>
			<td> : </td>
			<td><textarea name=komentar rows=6 width=200></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type=submit name=submit value=submit>
				<input type=hidden name=art_id value="<?php print $id ;?>"> 
			</td>
		</tr>
	</table>
</form>
</body>
</html>