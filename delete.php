<?php 
	include "koneksi.php";
	$id = $_GET["id"];

	$sql = "DELETE FROM tbl_100 WHERE id = $id";
	$hasil = mysqli_query($koneksi,$sql);

	if (!$hasil) {
		echo "Data gagal di hapus";
	}
	else{
		echo "Data berhasil dihapus";
	}
?>