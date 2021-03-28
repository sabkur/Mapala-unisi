<?php 

	$koneksi = mysql_connect("localhost", "root", "") or die("gagal koneksi");
	mysql_select_db("mapala", $koneksi) or die("pemilihan database gagal");

 ?>