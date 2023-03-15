<?php 
	session_start();
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="pro.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<title>HALAMAN LOG-OUT</title>
	<style type="text/css">	
		body{
			margin: 0;
			padding: 0;
			background-image: url('dbuku.jpg');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			font-family: sans-serif;
		}

		a{
			border: 2px solid;
			border-radius: 3px;
		}
	</style>
</head>
	<body>
	<div class="logout" style="border-style: 3px solid;">
		<h2 style="border-bottom: 1px solid; color: #333; text-align: center;">LOG-OUT AKUN ANDA</h1>
		<p>Yakin anda akan LogOut ?<br><br><br><br>
			<a href="login.php" style="margin-left: 50px; background-color: green; color:white;">Log-Out</a>
			<a href="admin.php" style="margin-left: 10px; background-color: green; color: white;">Cancel</a>
		</p>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>