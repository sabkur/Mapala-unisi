<html>
<head>
	<title>Dashboard Website MAPALA UNISI</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style type="text/css">
	body{
		background-image: url("../img/a.jpg");
		background-size: 100%;
		position: relative;
	}
	form{
		background-color: white;
		width: 25%;
		position: absolute;
		top: 150px;
		left: 36%;
		height: 255px;
		padding: 10px;
		padding-top: 20px;
		box-shadow: 0px 0px 10px 10px rgba(0,0,0,0.3);
	}

	form input.input{
		width: 250px;
		height: 30px;
	}

	form input.input:hover{
		box-shadow: 0 0 11px #006bb3;
	}
	form input.button{
		margin-top: 20px;
		background-color:  #cccccc;
		padding: 3px;
		width: 70px;
		border-radius: 4px;
		height: 30px;
		border:none;
	}

	form input.button:hover{
		background-color:  #0066cc;
		color:white;
		cursor: pointer;
	}

	form h2 p{
		font-size: 22px;
	}
</style>
<body>	
	<div>
		<form method="post" action="proseslogin.php" id="form" name="form" align="center">
			<h2><center>
				<p><b>LOG-IN</b></p><p>WEBSITE MAPALA UNISI</p>
			</center>
		</h2>
		<label>Username :  </label> <input class="input" placeholder="Masukkan Username Anda.." type="text" name="username"> <br><br>
		<label>Password :&nbsp;</label> <input class="input" placeholder="Masukkan Password Anda..." type="password" name="password"> <br>
		<input class="button" type="submit" value="Login" name="login">
		<input class="button" type="reset" value="Cancel" name="reset">
	</form>		
</div>
</body>
</html>