<?php 

    include 'koneksi.php';

    $judul = $_POST['judul'];
    $konten = $_POST['konten'];    
    $tanggal = date("Y-m-d");

    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $tipe_file   = $_FILES['gambar']['type'];
    $nama_file   = $_FILES['gambar']['name'];
    $direktori   = "gambar/$nama_file";


if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori);  

    function limit_words($string,$word_limit){
        $words = explode(" ", $string);
        return implode(" ", array_splice($words,0,$word_limit));
    } 

    $long_string = $konten;
    $limited_string = limit_words($long_string, 200)."...";
        
    $q = mysql_query("INSERT INTO berita (tgl_post, judul, konten, gambar, konten_singkat) VALUES('$tanggal', '$judul', '$konten', '$nama_file','$limited_string')");  
         
    if (!$q) {
        echo "<script>alert('Artikel gagal diSimpan !')</script>";
        echo "<meta http-equiv='refresh' content='0;url=tambahberita.php'>";
    }else{
        echo "<script>alert('Artikel sukses diSimpan !')</script>";
        echo "<meta http-equiv='refresh' content='0;url=berita list.php'>";
    }
    
     
  }else{
    echo "terjadi kesalahan"; 
  }

 ?>