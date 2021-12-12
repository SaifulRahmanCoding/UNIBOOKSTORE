<?
$halaman = "admin";
// import koneksi
require_once('assets\koneksi.php');

//mendapatkan data ID
if (isset($_GET['id_penerbit'])) {
	$idPenerbit = $_GET['id_penerbit'];
}
else {
	echo "ID tidak ditemukan! <a href='admin.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM penerbit WHERE id_penerbit = '$idPenerbit'";
$result = mysqli_query($db,$query);

foreach($result as $penerbit){
	$idPenerbit = $penerbit['id_penerbit'];
	$nama = $penerbit['nama'];
	$alamat = $penerbit['alamat'];
	$kota = $penerbit['kota'];
	$telepon = $penerbit['telepon'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input penerbit</title>
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
				<h2 align="center" class="mb-5">Edit penerbit</h2>
				<form action="action/action_edit_penerbit.php" method="POST">

					<input name="idPenerbit" id="idPenerbit"  class="form-control" type="hidden" placeholder="kode /ID penerbit" value="<?=$idPenerbit?>" required>

					<div class="form-group mb-3">
						<label for="nama" class="mb-2">Nama</label>

						<input name="nama" id="nama"  class="form-control" type="text" placeholder="Nama Penerbit" value="<?=$nama?>" required>
					</div>

					<div class="form-group mb-3">
						<label for="alamat" class="mb-2">Alamat</label>

						<textarea name="alamat" class="form-control" id="alamat" rows="4" placeholder="isi alamat"><?=$alamat?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="kota" class="mb-2">Kota</label>
						<input name="kota" id="kota"  class="form-control" type="text" placeholder="Isi Kota" value="<?=$kota?>" required>
					</div>

					<div class="form-group mb-3">

						<label for="telepon" class="mb-2">Telepon</label>

						<input name="telepon" id="telepon"  class="form-control" type="number" placeholder="telepon" value="<?=$telepon?>" required>

					</div>

					<div class="col-12 d-flex justify-content-center">
						<input type="submit" name="submit" value="Edit" class="btn btn-info text-white col-6 mt-3 mb-3">
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