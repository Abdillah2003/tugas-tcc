<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROJECT PRAKTIKIM WEB IF-G 123200017/123200027</title>
	<link rel="stylesheet" type="text/css" href="pro.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style type="text/css">
    	.gambar{
    		margin: 25px;
    		width: 300px;
    		height: 500px;
    		border-radius: 15px;
    		background-color: lavender;
    	}
    	.gambar img{
    		margin-left: 13px;
    		margin-top: 15px;
    		border-radius: 10px;
    		border: 2px solid;
    	}
    	.gambar h4{
    		text-align: center;
    	}
    	.gambar p{
    		text-align: center;
    	}
    	.depan{
    		width: 220px;
    		height: 180px;
    		border-radius: 10px;
    		text-align: center;
    		font-family: sans-serif;
    		background-color: lavender;
    		margin-top: 30px;
    		text-align: center;
    		border: 2px solid;
    	}
    	.depah h4{
    		margin-top: 20px;

    	}
    </style>
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
				<li class="active"> <a href="admin.php">HOME</a></li>
				<li class=""> <a href="bbuku.php">DAFTAR BUKU</a></li>
				<li class=""> <a href="form.php">BELI BUKU</a></li>
				<li class=""> <a href="struk.php">UPDATE</a></li>
	<!-- 			<li class=""> <a href="editdanhapus.php">E&H</a></li> -->
				<li class=""> <a href="kontak.php">KONTAK</a></li>
				<li class=""> <a href="logout.php">LOGOUT</a></li>
			</ul>
			
		</div>
	</header>
	<section class="label">
    <div class="container" style="height: 8vh;">
       <br><p>HOME/HOME</p>     
    </div>
	</section>
	<section class="banner">
		<div class="gambar" >
			<img style="widht:300px; height: 180px;" src="abdillah.jpg"><br><br>
			<h4>Nama   : Abdillah Mustamin</h4><br>
			<p>NIM     : 123200017</p><br>
			<p>Asal    : Sulawesi Tenggara</p><br>
			<p>Jurusan : Teknik Informatika</p><br>
			<p>Fakultas: Teknik Industri</p><br>
			<p>Universit Pemabagunan Nasional "veteran" Yogyakarta</h4>
		</div>
		<div class="depan">
			<h4><br>SELAMAT DATANG DITOKO A&G
			<br>ANDA BELI KAMI JUAL
			<br>ANDA DAPAT BUKU KAMI DAPAT UANG
			<br>ANDA TEKOR KAMI UNTUNG</h4>
		</div>
		<div class="gambar" >
			<img style="widht:300px; height: 180px" src="gg.jpeg"><br><br>
			<h4>Nama   : Gilang Pappa Tanto Pambua</h4><br>
			<p>NIM     : 123200027</p><br>
			<p>Asal    : Sulawesi Selatan</p><br>
			<p>Jurusan : Teknik Informatika</p><br>
			<p>Fakultas: Teknik Industri</p><br>
			<p>Universit Pemabagunan Nasional "Veteran" Yogyakarta</p>
		</div>

	</section>

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