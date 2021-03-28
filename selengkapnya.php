<?php 
require_once "koneksi.php";
    $id_berita = $_GET['id_berita'];

    if (ISSET($_GET['id_berita']))
    {

    $query  = "select * from berita where id=$id_berita";
    $runquery = mysql_query($query);
    $result = mysql_fetch_array($runquery);
    $isi_artikel = $result['konten'];
    $judul = $result['judul'];    
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

    #content_berita{
        box-shadow:  0 0 5px 5px rgba(0,0,0,0.3);
         width: 80%;
         margin: auto;
         margin-top: 30px;
         padding: 10px;
    }

    #mainbar_berita{

    }

    #content1_berita{
           box-shadow:  0 0 5px 5px rgba(0,0,0,0.3);
           width: 80%;
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

      <div id="content_berita">
        <div id="mainbar_berita">
            <div class="content1_berita">
                <div id="kiri"> 
                <br/>                   
                <h2><span style="color:#238A88"><?php print "$judul" ?></span></h2>
                <div>                    
                    <td><img widht="300px" height="300px" src="admin/gambar/<?php echo $result['gambar']; ?>" /></td>
                </div>                
    
                <p><?php print "$isi_artikel" ?></p>      
                
                <?php
                print "<br><a  href=index.php><h4>Kembali</h4></a><br><br>";

                print "<b>Komentar : </b><hr>";
                require_once "komentar.php";
                }
                else
                print "";
                ?>
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