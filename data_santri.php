<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data santri madin Al-Amin</title>
  </head>
  <body class="bg-primary p-2 text-dark bg-opacity-10 mt-3">
  	<div class="container">
    <h1 class="display-5" style="text-align: center;">DATA SANTRI MADIN AL-AMIN</h1>
    <br>
    <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="form_tambah_data.php">Tambah Data</a></button>
    <div class="row justify-content-start mt-3">
    <div class="col-md-12 inline">
		<table border="1" width="80%" class="table table-striped table-hover" style="text-align: center;">
			<tr>
				<th>Id Santri</th>
				<th>Nama Santri</th>
				<th>Kode Santri</th>
				<th>Nama Wali Santri</th>
				<th>Alamat Santri</th>
				<th>Tahun Masuk</th>
				<th>Action</th>
			</tr>
			<?php 
			include "koneksi.php";
				$sql = "SELECT * FROM tbl_100";
				$hasil = mysqli_query($koneksi, $sql);

				while ($row = mysqli_fetch_array($hasil)) 
				{
				?>
			<tr>
				<td><?=$row["id"];?></td>
				<td><?=$row["namasantri"];?></td>
				<td><?=$row["kodesantri"];?></td>
				<td><?=$row["namawalisantri"];?></td>
				<td><?=$row["alamatsantri"];?></td>
				<td><?=$row["tahunmasuk"];?></td>
				<td>
					<button type="button" class="btn btn-success"><i class="bi bi-backspace"></i><a style="text-decoration: none; color: white;" href="form_edit.php?id=<?=$row["id"]?>">Edit</a></button>
					<button type="button" class="btn btn-danger"><a style="text-decoration: none; color: white;" href="delete.php?id=<?=$row["id"]?>"">Delete</a></button>
				</td>
			</tr>
			<?php 
				}
			 ?>
		</table>
	</div>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>