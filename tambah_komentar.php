<?php 

    include 'koneksi.php';

    $nama = $_GET['nama'];
    $isi = $_GET['komentar'];  
    $id_berita = $_GET['id_berita'];    
    $tanggal = date("Y-m-d");


        
    $q = mysql_query("INSERT INTO komentar (tgl_post, id_berita, nama, isi_komentar) VALUES('$tanggal', '$id_berita', '$nama', '$isi')");  
         
    if (!$q) {
        echo "<script>alert('Komentar gagal diSimpan !')</script>";
        echo "<meta http-equiv='refresh' content='0;url=selengkapnya.php?id_berita=$id_berita'>";
    }else{
        echo "<script>alert('Komentar sukses diSimpan !')</script>";
        echo "<meta http-equiv='refresh' content='0;url=selengkapnya.php?id_berita=$id_berita'>";
    }
    
     

 ?>