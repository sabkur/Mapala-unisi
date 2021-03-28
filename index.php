<?php 
require_once "koneksi.php";
$query = "select * from berita";
$runquery = mysql_query($query);
?>
<html>
<head>
  <title>MAPALA UNISI</title>

  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.immersive-slider.js"></script>
  <script type="text/javascript" src="js/javascriptsaya.js"></script>
  <link href='css/immersive-slider.css' rel='stylesheet' type='text/css'>
  <style type="text/css">
    .marq{
      font-size: 50px;
      margin-top: 20px;
      color: white;
    }
  </style>
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

  <div id="content">
    <div id="mainbar">

      <div class="page_container">
        <div id="immersive_slider">
        <?php 
            $q = mysql_query("SELECT * FROM berita");
            while($berita = mysql_fetch_array($q)){
              $id_berita = $berita['id'];
               $isi_artikelnya = $berita['konten'];                        
               $isi = substr($isi_artikelnya,0,300);
               $isi = substr($isi_artikelnya,0,strrpos($isi," "));       
        ?>
          <div class="slide" data-blurred="img/slide2_blurred.jpg">          
            <div class="content">
              <h3><a <?php echo"href='selengkapnya.php?id_berita=$id_berita'"?>><?php echo $berita['judul'] ?></a></h3>
              <p>
                <?php echo $isi."..." ?>
              </p>
            </div>
            <div class="image">
              <a <?php echo "href='selengkapnya.php?id_berita=$id_berita'"?>> <img src="admin/gambar/<?php echo $berita['gambar'] ?>" alt="Slider 1"></a>
            </div>
          </div>
          <?php
            }
          ?>
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      $(document).ready( function() {
        $("#immersive_slider").immersive_slider({
          container: ".main"
        });
      });

    </script>

    <script>

      var _gaq=[['_setAccount','UA-11278966-1'],['_trackPageview']]; 
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>

    </div>

    <div class="sidebar">
      <h3 style="color:white; font-size:24px; margin-right:10px;">Daftar Berita Terbaru</h3>
      <?php         
      while($result = mysql_fetch_array($runquery)){ 
        $id = $result['id'];
        $judul = $result['judul'];  
        $isi_artikelnya = $result['konten'];                        
        $isi = substr($isi_artikelnya,0,200);
        $isi = substr($isi_artikelnya,0,strrpos($isi," "));                                          
        ?>
        <table border="0" style="font-size: 18px;">
          <tbody>
            <tr>
              <td><?php print "<a style='background-color:black; color:white; width:100%; padding:4px;' href='selengkapnya.php?id_berita=$id'> $judul </a>"; ?> 
              </td>
            </tr>
             <tr>
              <td 
              <?php echo "href='selengkapnya.php?id_berita=$id_berita'"?>> <img src="admin/gambar/<?php echo $result['gambar'] ?>" width="200px;" height="155px;" alt="Slider 1">
              </td>
            </tr>
            <tr>
              <td><?php print "<a style='background-color:white; color:black; width:100%; padding:4px;'  href='selengkapnya.php?id_berita=$id'> $isi... </a>"; ?> 
              </td>
            </tr>
          </tbody>
        </table>
        <?php } 
        ?>
      </div>
    </br>


  </div>

</div>

<br />
<br />

<div style="clear:both;"></div>
</div>

<div id="wrapper">
  <div id="footer">
    <h3 align="center">Find Us</h3>
    <div>
      <ul>
        <li id="sosmed"> <a  href="https://www.facebook.com/yuridi.bintang.pratama" target="blank"> <img src="img/_facebook.jpg"> </a> </li>
        <li id="sosmed"> <a  href="https://twitter.com/yuridibp"target="blank"> <img src="img/_twitter.jpg"> </a> </li>
        <li id="sosmed"> <a  href="https://pinterest.com/"target="blank"> <img src="img/_rss.jpg"> </a> </li>
        <li id="sosmed"> <a  href="https://gmail.com/yuriiieriiie"target="blank"> <img src="img/_pinterest.jpg"> </a> </li>
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