<?php 
	include 'koneksi.php';

	$nama_pembeli = $_GET['nama_pembeli'];

	$query=mysqli_query($koneksi, "DELETE FROM webku WHERE nama_pembeli='$nama_pembeli'");

	if($query){
		header("location:struk.php");
	}
	else{
		echo "Data gagal dihapus";
	}
?>