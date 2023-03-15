<?php
	include "koneksi.php";

	$nama_pembeli     = $_POST['nama_pembeli'];
	$tanggal_beli     = $_POST['tanggal_beli'];
	$judul_buku       = $_POST['judul_buku'];
	$harga_buku       = $_POST['harga_buku'];
	$jumlah_buku      = $_POST['jumlah_buku'];

	$query = mysqli_query($koneksi, "INSERT INTO webku VALUES ('$nama_pembeli','$tanggal_beli', '$judul_buku', '$harga_buku', '$jumlah_buku')") or die(mysqli_error($koneksi));

	if($query){
		header("location:struk.php");
	}
	else{
		echo "Proses input gagal";
	}
?>