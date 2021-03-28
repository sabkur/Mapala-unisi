<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    mysql_query("DELETE FROM berita WHERE id = '$_GET[id]'");
}
header("location:beritalist.php")
?>