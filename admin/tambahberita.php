<html>
<head>
    <title>Create Artikel</title>
    <link rel="stylesheet" type="text/css" href="../css/berita_style.css">
    <style type="text/css">
        body{
            background-color: white;
        }
        .menu{
            background-color: #001a00;
        }

        .menu ul li a{
            color:white;
            padding: 15px;
        }

        .menu ul li a:hover{
            background-color:  #b30000;
            color:white;
        }

        form input.button{
        margin-top: 20px;
        background-color:  #0066cc; 
        color:white;
        padding: 3px;
        width: 70px;
        border-radius: 4px;
        height: 30px;
        border:none;
    }

    form input.button:hover{
        background-color: #b30000;
        color:white;
        cursor: pointer;
    }

    fieldset{
        background-color:  #ccccb3;
    }
    </style>
</head>
<body>
<div class="menu">
   <ul>
        <li><a href="tambahberita.php">TAMBAH BERITA</a></li>
        <li><a href="beritalist.php">DAFTAR BERITA</a></li>
        <li><a href="logout.php">LOGOUT</a></li>  
    </ul>
</div>
<div>
    <fieldset style="width: 50%;  margin: auto; margin-top:50px;">
        <h3>Form Tambah Berita</h3>
         
        <form action="simpanberita.php" method="post" name="berita" enctype="multipart/form-data">
            <label>Judul : </label>
            <input type="text" size="100" weidth="70px"  name="judul"> <br>
                      
            <label>Konten : </label> <br>
            <textarea cols="100" rows="15" name="konten"></textarea> <br>

            <label>Gambar : </label>
            <input  type="file" name="gambar">
            <br>
                <input class="button" type="submit" value="Simpan" />
                <input class="button" type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">           
        </form>
    </fieldset>
</div>
</body>
</html>