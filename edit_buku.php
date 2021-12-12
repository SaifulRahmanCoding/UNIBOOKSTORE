<?
$halaman = "admin";
// import koneksi
require_once('assets\koneksi.php');

//mendapatkan data ID
if (isset($_GET['id_buku'])) {
	$idBuku = $_GET['id_buku'];
}
else {
	echo "ID tidak ditemukan! <a href='admin.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM buku WHERE id_buku = '$idBuku'";
$result = mysqli_query($db,$query);

foreach($result as $buku){
	$id_buku = $buku['id_buku'];
	$namaBuku = $buku['nama_buku'];
	$kategori = $buku['kategori'];
	$harga = $buku['harga'];
	$stok = $buku['stok'];
	$penerbit = $buku['penerbit'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Buku</title>
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
				<h2 align="center" class="mb-5">Edit Buku</h2>
				<form action="action/action_edit_buku.php" method="POST">

					<div class="form-group mb-3">
						<label for="idBuku" class="mb-2">ID Buku</label>

						<input name="idBuku" id="idBuku"  class="form-control" type="text" placeholder="kode /ID buku" value="<?=$id_buku?>" required>
					</div>

					<div class="form-group mb-3">
						<label for="namaBuku" class="mb-2">Nama Buku</label>

						<input name="namaBuku" id="namaBuku"  class="form-control" type="text" placeholder="Nama Buku" value="<?=$namaBuku?>" required>
					</div>

					<div class="form-group mb-3">
						<label for="kategori" class="mb-2">Kategori</label>

						<select id="kategori" class="form-control" name="kategori" required>

							<?if ( $kategori == "keilmuan" ){?>
							<option value="keilmuan">Keilmuan</option>
							<option value="bisnis">Bisnis</option>
							<option value="novel">Novel</option>
							<? } ?>

							<?if ( $kategori == "bisnis" ){?>
							<option value="bisnis">Bisnis</option>
							<option value="keilmuan">Keilmuan</option>
							<option value="novel">Novel</option>
							<? } ?>

							<?if ( $kategori == "novel" ){?>
							<option value="novel">Novel</option>
							<option value="keilmuan">Keilmuan</option>
							<option value="bisnis">Bisnis</option>
							<? } ?>

						</select>
					</div>

					<div class="form-group mb-3">
						<label for="harga" class="mb-2">Harga ( Rp )</label>

						<input name="harga" id="harga"  class="form-control" type="number" placeholder="Harga Dalam Rupiah" value="<?=$harga?>" required>
					</div>

					<div class="form-group mb-3">
						<label for="stok" class="mb-2">Stok Buku</label>
						<input name="stok" id="stok"  class="form-control" type="number" placeholder="Stok Buku" value="<?=$stok?>" required>
					</div>

					<div class="form-group mb-3">
						<label for="penerbit" class="mb-2">Penerbit</label>

						<input name="penerbit" id="penerbit"  class="form-control" type="text" placeholder="Penerbit" value="<?=$penerbit?>" required>
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