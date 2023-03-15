<?php
	include "koneksi.php";

	$username   = $_POST['username'];
	$password   = $_POST['password'];
	$ttl        = $_POST['ttl'];
	$alamat     = $_POST['alamat'];
	$kota       = $_POST['kota'];
	$negara     = $_POST['negara'];
	$kode_pos    = $_POST['kode_pos'];

	$query = mysqli_query($koneksi, "INSERT INTO tab_tegistrasi VALUES ('$username','$password','$ttl','$alamat','$kota','$negara','$kode_pos')") or die(mysqli_error($koneksi));

	if($query){
		header("location:login.php");
		echo "login berhasil";
	}
	else{
		echo "Proses input gagal";
	}
?>