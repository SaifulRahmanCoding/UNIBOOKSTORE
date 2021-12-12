<?
$halaman = "admin";
// import koneksi
require_once('assets\koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Penerbit</title>
	<?
	require('assets/config/style.php');
	?>
</head>
<body>
	<!-- header dan navbar -->
	<?
	require('komponen/navbar.php');
	?>
	<!-- end header dan navbar -->

	<!-- form input -->
	<div id="form">
		<div class="container-form">
			<div class="col-12 p-3 p-sm-5 bg-light my-4">
				<h2 align="center" class="mb-5">Tambah Penerbit</h2>
				<form action="action/action_penerbit.php" method="POST">

					<div class="form-group mb-3">
						<label for="idPenerbit" class="mb-2">ID Penerbit</label>

						<input name="idPenerbit" id="idPenerbit"  class="form-control" type="text" placeholder="kode /ID Penerbit" required>
					</div>

					<div class="form-group mb-3">
						<label for="nama" class="mb-2">Nama</label>

						<input name="nama" id="nama"  class="form-control" type="text" placeholder="Nama Penerbit" required>
					</div>

					<div class="form-group mb-3">
						<label for="alamat" class="mb-2">Alamat</label>

						<textarea name="alamat" class="form-control" id="alamat" rows="4" placeholder="isi alamat"></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="kota" class="mb-2">Kota</label>

						<input name="kota" id="kota"  class="form-control" type="text" placeholder="Kota Penerbit" required>
					</div>

					<div class="form-group mb-3">
						<label for="telepon" class="mb-2">Telepon</label>

						<input name="telepon" id="telepon"  class="form-control" type="number" placeholder="08xxxxxxx" required>
					</div>

					<div class="col-12 d-flex justify-content-center">
						<input type="submit" name="submit" value="Tambah" class="btn btn-info text-white col-6 mt-3 mb-3">
						&nbsp
						<a href="admin.php" class="btn btn-info text-white col-6 mt-3 mb-3">Kembali</a>
					</div>

				</form>

			</div>

		</div>
	</div>
	<!-- end form input -->	

</body>
<?
require('assets/config/script.php');
?>
</html>