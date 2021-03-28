<?php 
	include "koneksi.php";
	$q = mysql_query("SELECT * FROM berita");
?>

<html>
<head>
	<title>Artikel List</title>
	 <link rel="stylesheet" type="text/css" href="../css/berita_style.css">
	 <style type="text/css">
        body{
            background-color: white;
        }
        .menu{
            background-color: #001a00;
        }

        .menu ul li a{
        	text-decoration: none;
            color:white;
            padding: 15px;
        }

        .menu ul li a:hover{
            background-color:  #b30000;
            color:white;
        }

        table{
        	margin: auto;
        	margin-top: 50px;

        }

        table thead{
        	background-color: #adad85;
        	color: white;
        	font-size: 19px;
        	border-width: 5px;
        }

        table tr{

        }

        table td{

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
<table border="1px" cellpadding="10px" cellspacing="5px">
	<thead>
		<td> NO </td>
		<td> Tanggal </td>
		<td> Judul </td>
		<td> Konten </td>		
		<td> Gambar </td>
		<td> Manage </td>
	</thead>
	<?php 
		$no = 1;
		while ($data = mysql_fetch_array($q)){
			if(($no % 2) == 0){
				$warna ="#fafafa";
			} else {
				$warna ="#ffffff";
			}
		
	 ?>
	 <tbody bgcolor="<?php echo "$warna"; ?>" >
	 	<td><?php echo "$no"; ?></td>
	 	<td><?php echo "$data[tgl_post]" ?></td>
	 	<td><?php echo "$data[judul]" ?></td>
	 	<td><?php echo "$data[konten_singkat]" ?></td>	 	
	 	<td><img src="gambar/<?php echo $data['gambar']; ?>" width="100" /></td>
	 	<td><a style="color:black" href="editberita.php?id=<?php echo $data['id'] ?>"> Edit</a>
	 	<a style="color:black" href="hapusberita.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')" > Hapus</a></td>
	 </tbody>
	 <?php $no=$no+1; } ?>

</table>
</body>
</html>