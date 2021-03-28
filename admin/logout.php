<?php 
session_start();

session_destroy();
setcookie("User[email]", "", time()-3600);
echo "<script>alert('LOGOUT !')</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";
?>
