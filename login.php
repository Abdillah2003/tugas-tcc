<?php 
	session_start();
	include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="tampilan.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>HALAMAN LOGIN</title>
	<style type="text/css">
	.login{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		background:lavender;
		padding: 25px;
		width: 400px;
		height: 480px;
		border-radius: 10px;
	}
	input{
		width: 300px;
		height: 35px;
	}
	.gagal{
		margin-left: 10%;
	}

	</style>
</head>
<body>
	<div class="login">
		<h2 style="border-bottom: 2px solid; color: #333; text-align: center;">LOGIN TOKO BUKU A&G</h2><br>
		<form method="post">
			<label> Username : </label><br>
			<input type="text" name="fusername"><br><br>
			<label> Password : </label><br>
			<input type="password" name="fpassword"><br><br>
			<button type="submit" name="fmasuk" style="border-radius:5px; background-color:blue;">LOGIN</button><br>
		</form>
		<div>
			<form method="POST" action="registrasi.php">
			<label style="font-family: sans-serif; margin-left: 28%; "><br>Belum punya akun?</label><br>
			<button type="sigin" name="sigin" style="border-radius: 5px; margin-left: 40%; background-color: blue;">Sig-Up</button><br>
			</form>
		</div>
	</div>

	<div class="gagal" style="margin-top: 3%;">
	<?php

	if(isset($_POST['fmasuk'])){
		$username = $_POST['fusername'];
		$password = $_POST['fpassword'];
		$qry = mysqli_query($koneksi, "SELECT * FROM tab_tegistrasi WHERE username = '$username' AND password = '$password' ");
		if(mysqli_num_rows($qry)){
			$_SESSION['userweb']=$username;
			header ("location:admin.php");
			exit;
		}else{
			echo " Maaf Username dan password yang anda masukan salah!!. silahkan coba lagi atau buat akun baru...";
		}

	}
	 ?>
	 </div>
</body>
</html>