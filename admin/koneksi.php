<?php 
	
	// $dir_gambar = 'C:\xampp\htdocs\ProjekPWEB\CRUD\gambar\\'; //direktori dalam server
	// $url_folder_gambar = 'http://localhost/ProjekPWEB/CRUD/$gambar';  //URL dari direktori jika diakses lewat browser

	$koneksi = mysql_connect("localhost", "root", "") or die("gagal koneksi");
	mysql_select_db("mapala", $koneksi) or die("pemilihan database gagal");

 ?>


<table>
<table border="1px" cellpadding="10px" cellspacing="5px">
	<thead>
		<td> NO </td>
		<li>a</li>
		<td> nama </td>
		<li>b</li>
		<td> aksi </td>
		<li>c</li>
	</thead>