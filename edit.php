<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laman Edit Data</title>
	  <style type="text/css">
  	.konten{
  		border-radius: 10px;
		background-color: lavender;
		padding: 100px;
		border: 2px solid black;	
	}
	.konten table{
		width: 1000px;
		height: 350px;
	}
	.konten input{
		width: 800px ;
		height: 30px;
		border-radius: 10px;
	}
	button{
		width: 70px;
		height: 45px;
		background: green;
		border-radius: 5px;
	}
  </style>
</head>
<body>
<div class="container">
	<div class="konten">
		<h2 style="text-align:center; border-bottom:3px solid; font: sans-serif;">FORM EDIT DATA PEMBELIAN BUKU</h2>
	<?php 
		include "koneksi.php";
		// error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
		$nama_pembeli= $_GET['nama_pembeli'];
		$query = mysqli_query($koneksi, "SELECT * FROM webku WHERE nama_pembeli='$nama_pembeli'");
		while($hasil = mysqli_fetch_array($query)){
	?>
	<form method="POST" action="prosesedit.php">
		<table>
			<tr>
				<div class="mb-3">
					<td><label for="exampleFormControlInput1" class="form-label">Nama Pembeli</label></td>
					<td colspan="2"><input type="text" class="form-control" id="exampleFormControlInput1" name="nama_pembeli" value="<?php echo $hasil['nama_pembeli'];?>" aria-label="readonly input example" readonly>
				</div>
			</tr>
			<tr>
				<div class="mb-3">
				  	<td><label for="exampleFormControlInput1" class="form-label">Tanggal Transaksi</label></td>
					<td><input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_beli" value="<?php echo $hasil['tanggal_beli'];?>"></td>
				</div>
			</tr>
			<tr>
				<div class="mb-3">
				<td><label for="exampleFormControlInput1" class="form-label">Judul Buku</label></td>
				<td colspan="2"><input type="text" class="form-control" id="exampleFormControlInput1" name="judul_buku" value="<?php echo $hasil['judul_buku'];?>"></td>
				</div>
			</tr>
			<tr>
				<div class="mb-3">
					<td><label for="exampleFormControlInput1" class="form-label">Harga Buku</label></td>
					<td colspan="2"><input type="text" class="form-control" id="exampleFormControlInput1" name="harga_buku" value="<?php echo $hasil['harga_buku'];?>"></td>
				</div>
			</tr>
			<tr>
				<div class="mb-3">
					<td><label for="exampleFormControlInput1" class="form-label">Jumlah Buku</label></td>
					<td colspan="2"><input type="text" class="form-control" id="exampleFormControlInput1" name="jumlah_buku" value="<?php echo $hasil['jumlah_buku'];?>"></td>
				</div>
			</tr>
		</table>
		<br>
		<button type="submit" class="btn btn-outline-primary">Submit</button>
	</form>
			<?php 
				}
			 ?>
	</div>
</div>



</body>
</html>