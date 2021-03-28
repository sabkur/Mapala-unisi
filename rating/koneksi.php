<?php 
	
	// $dir_gambar = 'C:\xampp\htdocs\ProjekPWEB\CRUD\gambar\\'; //direktori dalam server
	// $url_folder_gambar = 'http://localhost/ProjekPWEB/CRUD/$gambar';  //URL dari direktori jika diakses lewat browser

	$koneksi = mysql_connect("localhost", "root", "") or die("gagal koneksi");
	mysql_select_db("futsal", $koneksi) or die("pemilihan database gagal");

 ?>