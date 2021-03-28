<?php 
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM admin WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);

if($jumlah == 0) {
echo "<script>alert('Username atau Password Anda Salah'); window.location.href='../admin/index.php'</script>";

} else {
if($pass <> $hasil['password']) {
echo "<script>alert('Username atau Password Anda Salah'); window.location.href='../admin/index.php'</script>";

} else {
setcookie("username", $username, time()+3600);
header('location:tambahberita.php');
}
}

?>
