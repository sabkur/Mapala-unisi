<?php 
    require_once "koneksi.php";
    $query = "select * from berita";
    $runquery = mysql_query($query);
?>

<html>
<head>
<title>MAPALA UNISI</title>
<link rel="stylesheet" type="text/css" href="css/berita_style.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
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
  
    <div id="content_berita">
        <div id="mainbar_berita">
                    <?php while($result = mysql_fetch_array($runquery)){ 
                        $id = $result['id'];
                        $judul = $result['judul'];
                        $isi_artikelnya = $result['konten'];                        
                        $isi = substr($isi_artikelnya,0,400);
                        $isi = substr($isi_artikelnya,0,strrpos($isi," "));
                    ?>
                <div class="content1">                
                    
                    <div id="kiri">
                    
                    <h2><span style="color:black"><?php print "$judul" ?></span></h2>
                    <p><?php print"$isi..." ?></p>

                    <br/>
                
                
                    <?php 
                         $s=mysql_query("SELECT isi_komentar FROM komentar WHERE id_berita = $id");
                         $jumlah = mysql_num_rows($s);
                         echo "<i>$jumlah Komentar</i><br>";
                    ?>

                    <br/>
                

                    <?php
                        print "<a href='selengkapnya.php?id_berita=$id'><h4>Baca Selengkapnya</h4></a>";
                    ?>

                
                
                </div>
                <div id="kanan">                    
                    <img class="img" width="430px" height="400px"src="admin/gambar/<?php echo $result['gambar']; ?>" >

                </div>
                
                </div>
                <?php
                    }
                ?>

                
            
        </div>  

    </div>     
        <br /><br />
        <div style="clear:both;"></div>
    </div> 
    <br />
 <img src="img/pisah.png"></img>
<div id="wrapper">
    <div id="footer">
        <h3 align="center">Find Us</h3>
            <div>
                <ul>
            <li id="sosmed"> <a  href="www.facebook.com/yuridi.bintang.pratama" target="blank"> <img src="img/_facebook.jpg"> </a> </li>
            <li id="sosmed"> <a  href="www.twitter.com/yuridibp"target="blank"> <img src="img/_twitter.jpg"> </a> </li>
            <li id="sosmed"> <a  href="#"target="blank"> <img src="img/_rss.jpg"> </a> </li>
            <li id="sosmed"> <a  href="https://gmail.com/yuriiiieriiie"target="blank"> <img src="img/_pinterest.jpg"> </a> </li>
                </ul>
              </br>
<img align="center" src=""></img>
      <img src="img/pisah.png"></img>
        </br>
        </br>
        <small>Copyright & 2016 MAPALA UNISI</small>
    </div>
</div>
</div>
</body>
</html>