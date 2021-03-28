<?php 
require_once 'koneksi.php';
$judul = $_GET['judul'];
$q = "SELECT * FROM brita where judul like '%$judul%' ";

$query=mysql_query($q);
$exist = mysql_num_rows($query);
if(empty($exist)){
	echo " 
	<div class='result'>
	Kuliner Tidak Ditemukan
	</div>";
}
if(empty($judul)){
	echo " 
	<div class='result' nohover>
	ketikan nama berita yang akan dicari.
	</div>";
} else {
	while($data=mysql_fetch_array($query)){
		$result = $data['judul'];
		echo"
		<div class='result'>
		$result
		</div>";
	}
}


?>