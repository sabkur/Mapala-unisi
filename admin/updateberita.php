<?php
include 'koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];
$filename = $_FILES['gambar']['name'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$direktori   = "gambar/$filename";

$move = move_uploaded_file($lokasi_file,$direktori); 

 function limit_words($string,$word_limit){
        $words = explode(" ", $string);
        return implode(" ", array_splice($words,0,$word_limit));
    } 


    $long_string = $konten;
    $limited_string = limit_words($long_string, 200)."...";

if(empty($filename)) {
	$sql = mysql_query("UPDATE berita SET judul = '$judul',
                                     		konten = '$konten',
                                            konten_singkat = '$limited_string'                                      
                                    WHERE id = '$id' ");
	echo "<script>alert ('data telah di update ');document.location='beritalist.php'</script>";	
}
elseif (!empty($filename)) {
                $tanggal = date('Y-m-d H:i:s');
                $sql = mysql_query("UPDATE berita SET tgl_post = '$tanggal',
    										judul = '$judul',
                                     		konten = '$konten',
                                     		gambar = '$filename',   
                                            konten_singkat = '$limited_string'                                          
                                    WHERE id = '$id' ");
echo "<script>alert ('data telah di update ');document.location='beritalist.php'</script>";
}
?>