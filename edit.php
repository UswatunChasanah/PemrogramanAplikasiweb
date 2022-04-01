<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Santri</title>
  </head>
  <body class="bg-primary p-2 text-dark bg-opacity-10 mt-10">
  	<div class="container" align="center">
  	<?php 
		include "koneksi.php";

		$id = $_POST["id"];
		$nama = $_POST["namasantri"];
		$kode = $_POST["kodesantri"];
		$namawali = $_POST["namawalisantri"];
		$alamat = $_POST["alamatsantri"];
		$tahunmasuk = $_POST["tahunmasuk"];

		$sql = "UPDATE tbl_100 SET namasantri = '$nama', kodesantri = '$kode', namawalisantri = '$namawali', alamatsantri = '$alamat', tahunmasuk = '$tahunmasuk' WHERE id = $id";
		$hasil = mysqli_query($koneksi,$sql);
		if (!$hasil) {
		?>
		<div class="card">
		<h1 class="display-6">Data Gagal Diedit</h1>
		<?php
		}
		else{
		?>
		<h1 class="display-6">Data Berhasil Diedit</h1>
		<button type="button" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white;" href="data_santri.php">Lihat Data Santri</a></button>
		</div>
		<?php
		}
	?>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>