<?php 
		include "koneksi.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROJECT PRAKTIKIM WEB IF-G 123200017/123200027</title>
	<link rel="stylesheet" type="text/css" href="pro.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://whatsapp.com"><img src="https://awsimages.detik.net.id/visual/2020/03/04/331bae75-fb47-4b1d-ba23-843ca34324b7_43.jpeg?w=450&q=90" style="widht: 30px; height: 30px; border-radius: 10px;"> </a></li>
				<li><a href="https://facebook.com"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_njIyfPBSWIeQGzGCU73YdoNCzaF_9w8kJA&usqp=CAU" style="widht: 30px; height: 30px; border-radius: 10px;"> </a></li>
				<li><a href="https://youtube.com"><img src="https://play-lh.googleusercontent.com/lMoItBgdPPVDJsNOVtP26EKHePkwBg-PkuY9NOrc-fumRtTFP4XhpUNk_22syN4Datc" style="width:30px; height:30px; border-radius:10px;"></i> </a></li>
				<li><a href="https://instagram.com"><img src="https://disk.mediaindonesia.com/thumbs/600x400/news/2020/03/1e2c29c543e1c21f54846e7f3eae7c7e.jpg" style="width:30px; height:30px; border-radius:10px;"></a></li>
			</ul>
		</div>
	</div>

	<header>
		<div class="container">
			<h1><a href="">PROJECT AKHIR WEB</a></h1>
			<ul>
				<li class=""> <a href="admin.php">HOME</a></li>
				<li class=""> <a href="bbuku.php">DAFTAR BUKU</a></li>
				<li class=""> <a href="form.php">BELI BUKU</a></li>
				<li class=""><a href="struk.php">STRUK</a></li>
		<!-- 		<li class="active"> <a href="editdanhapus.php">E&H</a></li> -->
				<li class=""> <a href="kontak.php">KONTAK</a></li>
				<li class=""> <a href="logout.php">LOGOUT</a></li>
			</ul>
		
	</header>
	<section class="label">
    <div class="container" style="height:8vh;">
       <br><p>HOME/EDIT DAN HAPUS</p>     
    </div>
	</section>

	<div class="konten2">
		<h2 style="text-align:justify; border-bottom: 3px solid;">EDIT DAN HAPUS</h2>
		<table>
			<tr style="font-family: sans-serif;">
				<td>Nama Pembeli</td>
				<td>Tanggal Pembeli </td>
				<td>Judul Buku</td>
				<td>Harga Buku</td>
				<td>Jumlah Buku</td>
			</tr>
			<?php
				include"koneksi.php";
				$query = mysqli_query($koneksi, "SELECT * FROM webku");
					while($data=mysqli_fetch_array($query)){
			?>			
				<tr style="font-family:sans-serif;"> 
					<td><?php echo $data['nama_pembeli']; ?></td>
					<td><?php echo $data['tanggal_beli']; ?></td>
					<td><?php echo $data['judul_buku']; ?></td>
					<td><?php echo $data['harga_buku']; ?></td>
					<td><?php echo $data['jumlah_buku']; ?></td>
					<td>
						<a href=edit.php = <?php echo $data['nama_pembeli']; ?>>Edit</a>
						<a href=hapuss.php = <?php echo $data['nama_pembeli']; ?>>Hapus</a>
					</td>
				</tr>
			<?php 
				}
			?>
			</table>
	</div>
	<footer>
		<div class="container">
			<small>CopyRigth 11112021_a&g.All Rigth</small>
		</div>
	</footer>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

</body>
</html>