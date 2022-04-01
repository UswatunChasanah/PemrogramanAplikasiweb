<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form tambah data santri</title>
  </head>
  <body class="bg-primary p-2 text-dark bg-opacity-10 mt-3">
    <div class="container">
  	<h1 class="display-6">FORM TAMBAH DATA</h1>
  	<div class="row justify-content-start mt-3">
        <div class="col-md-6 inline">
          	<form action="action.php" method="POST">
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Nama Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Nama Santri" name="namasantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">kode Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Kode Santri" name="kodesantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Nama Wali Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Nama Wali Santri" name="namawalisantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Alamat Santri</label>
		                <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Alamat Santri" name="alamatsantri" required>
	            </div>
	            <div class="mb-3">
		            <label for="disabledTextInput" class="form-label">Tahun Masuk</label>
		                <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukkan Tahun Masuk Santri" name="tahunmasuk" required>
	            </div>
	            <div class="d-grid gap-2">
					<button class="btn btn-primary" type="submit">Tambah Data</button>
				</div>

        	</form>
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