<?php
if(!empty($_POST['judul']))
{ 

    $tujuan = "sabrikurniadi@gmail.com";
    $judul = $_POST['judul'];
    $pesan = $_POST['pesan'];
    $pengirim=$_POST['pengirim'];
    $header = "From:$pengirim \r\n";
    $kirim = mail ($tujuan,$judul,$pesan,$header);
    if( $kirim == true ) 
    {
        echo "Pesan berhasil terkirim";
    }
    else
    {
        echo "Pesan gagal terkirim";
    }
}
?>

<html>
<head>
<title>MAPALA UNISI</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/javascriptsaya.js"></script>
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

</head>
<body>
<div class="wrapper">
  </br>
  <div class="header">
    <marquee class="marq">Selamat Datang di Website Mapala Unisi</marquee>
  </div>
  <div class="logo"><img width="120px" height="130px;" src="img/unisi.jpg"></div>
  <div class="logoUii"><img width="90px"; height="110px"; src="img/Logo Universitas Islam Indonesia.png";></div>
  <br>

  <div class="menu-wrap">
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="berita.php">Berita</a></li>
      <li><a href="#">Tentang Kami</a>
        <ul class="user">
          <li><a href="sejarah.php">Sejarah</a></li>
          <li><a href="visimisi.php">Visi & Misi</a></li>
          <li><a href="organisasi.php">Struktur Organisasi</a></li>
        </ul>
      </li>
      <li><a href="kontak.php">Kontak</a></li>
      <li><a class="unav" href="pencarian.php">Pencarian</a></li>
    </ul>
  </div>

    <div class="konten2">
        <div id="mainbar_berita">
            <div class="content1">
                <div id="kiri"> 
                    <p>
                        ID LINE: 54321sabri<br>                        
                        Email  : sabrikurniadi@gmail.com <br>
                        </p><p>
                            Untuk Kritik dan Saran silahkan hubungi kami dengan mengisi form dibawah ini. <br>
                            Terima Kasih Atas Kunjungannya.
                        </p>
                <table width="500">
                  <form name="kontak" method="post" action="">
                    <tr>
                      <td colspan="2"><h2>Form Kontak</h2></td>
                    </tr>
                    <tr>
                      <td>Judul Pesan</td>
                      <td><input name="judul" id="judul" type="text" size="40" required="true" placeholder="subject"></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td><input name="pengirim" type="text" id="pengirim" size="30" required="true" placeholder="Nama Anda"></td>
                    </tr>
                    <tr>
                      <td><p>Email</p></td>
                      <td><input name="email" type="text" id="email" size="30" required="true" placeholder="masukkan email Anda"></td>
                    </tr>
                    <tr>
                      <td>Pesan</td>
                      <td><textarea name="pesan" cols="40" rows="5" id="pesan" required="true"></textarea></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type="submit" name="btnKirim" value="Kirim" id="btnKirim">
                      <input type="reset" name="btnUlangi" id="button" value="Ulangi"></td>
                    </tr>
                  </form>
                </table>
                </div>    
            </div>
        </div>  
    </div>     
        <br /><br />
        <div style="clear:both;"></div>
    </div> 
<div id="wrapper">
    <div id="footer">
        <h3 align="center">Find Us</h3>
            <div>
                <ul>
            <li id="sosmed"> <a  href="https://www.facebook.com/" target="blank"> <img src="img/_facebook.jpg"> </a> </li>
            <li id="sosmed"> <a  href="https://twitter.com/"target="blank"> <img src="img/_twitter.jpg"> </a> </li>
            <li id="sosmed"> <a  href="https://pinterest.com/"target="blank"> <img src="img/_rss.jpg"> </a> </li>
            <li id="sosmed"> <a  href="https://gmail.com/"target="blank"> <img src="img/_pinterest.jpg"> </a> </li>
                </ul>
              </br>
        </br>
        </br>
        <small>Copyright & 2016 MAPALA UNISI</small>
    </div>
</div>
</div>
</body>
</html>