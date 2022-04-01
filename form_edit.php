<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form edit data santri</title>
  </head>
  <body class="bg-primary p-2 text-dark bg-opacity-10 mt-3">
  	<div class="container">
  	<h1 class="display-6">Form Edit Data Santri</h1>
	<?php 
		include "koneksi.php";

			$id = $_GET["id"];

			$sql = "SELECT * FROM tbl_100 WHERE id = $id";
			$hasil = mysqli_query($koneksi,$sql);
			if (!$hasil) {
				echo "Edit gagal";
			}
		?>
		<?php 
			while ($row = mysqli_fetch_array($hasil)) {
	?>
	<div class="row justify-content-start mt-3">
        <div class="col-md-6 inline">
          	<form action="edit.php" method="POST">
          		<input type="hidden" name="id" value="<?php echo $row["id"]?>">
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Nama Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row["namasantri"]?>" name="namasantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">kode Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row["kodesantri"]?>" name="kodesantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Nama Wali Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row["namawalisantri"]?>" name="namawalisantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Alamat Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row["alamatsantri"]?>" name="alamatsantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Tahun Masuk</label>
		                <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row["tahunmasuk"]?>" name="tahunmasuk" required>
	            </div>
	            <div class="d-grid gap-2">
					<button class="btn btn-primary" type="submit">Edit Data</button>
				</div>

        	</form>
        </div>
    </div>
</div>
    <?php 
    	}
     ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>