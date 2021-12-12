<?
$halaman = "pengadaan";
// import koneksi
require_once('assets\koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Pengadaan</title>
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

	<div id="pengadaan">
		<div class="container-admin">
			<div class="pengadaan-judul py-4">
				<h5 class="text-center text-secondary">Laporan Buku yang harus Segera Dibeli</h5>
				<p class="text-center text-secondary">Daftar Buku yang Stok-nya Kurang Dari 15</p>
			</div>

			<!-- tabel -->
			<div class="col table-responsive">

				<table class="table table-striped table-bordered responsive-utilities text-center">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col" style="min-width: 250px;">Nama&nbspBuku</th>
							<th scope="col" style="min-width: 200px;">Penerbit</th>
						</tr>
					</thead>

					<tbody>
						<?php

						$query= "SELECT * FROM buku WHERE stok<15 ORDER BY stok ASC";
						$result=mysqli_query($db, $query);
										// foreach
						$i=1;
						foreach ($result as $buku) {
							?>
							<tr>
								<th scope="row"><?=$i++?></th>
								<td><?=$buku['nama_buku']?></td>
								<td><?=$buku['penerbit']?></td>
							</tr>

						<? } ?>

					</tbody>
				</table>

			</div>
		</div>
	</div>
</body>
<?
require('assets/config/script.php');
?>
</html>