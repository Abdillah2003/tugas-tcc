<?php 
	include 'koneksi.php';

	$nama_pembeli  = $_POST['nama_pembeli'];
	$tanggal_beli  = $_POST['tanggal_beli'];
	$judul_buku    = $_POST['judul_buku'];
	$harga_buku    = $_POST['harga_buku'];
	$jumlah_buku   = $_POST['jumlah_buku'];

	$query = mysqli_query($koneksi, "UPDATE webku SET tanggal_beli='$tanggal_beli',judul_buku='$judul_buku', harga_buku='$harga_buku', jumlah_buku='$jumlah_buku' WHERE nama_pembeli='$nama_pembeli'");

	if($query){
		header("location:struk.php");
	}
	else{
		echo "Data gagal diedit!";
	}
?>