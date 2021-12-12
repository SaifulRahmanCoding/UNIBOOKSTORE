<?
$halaman = "home";
// import koneksi
require_once('assets\koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
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

	<!-- pencarian -->
	<div id="pencarian" class="my-4">
		<div class="container">
			<div class="fitur-cari">
				<form action="index.php" method="POST" class="d-flex">
					<div>
						<input type="search" name="cari" placeholder="Cari Buku...">
					</div>

					<button type="submit" name="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<!-- kondisikan jika ada nilai yang dimasukkan pada form cari -->
			<? if (empty($_POST['cari'])) { 
				echo " ";
			}
			else{ ?>
				<div class="hasil-pencarian my-3">
					<span class="fw-bolder fs-6">
						Hasil Pencarian : "<?=$_POST['cari']?>"
					</span>
				</div>
			<? }?>
		</div>
	</div>
	<!-- end pencarian -->

	<div id="konten" class="my-3">
		<div class="container">
			
			<div class="row">
				<?
				// fitur pencarian
				if (empty($_POST['cari'])) {
					$form_cari = "";
				}
				else{
					$form_cari = $_POST['cari'];
				}

				// filter jika fitur pencarian tidak ada input
				if (empty($form_cari)) {
					$kueriCari = " ";
				}
				else{
					$kueriCari = "WHERE nama_buku LIKE '%$form_cari%'";
				}
				$search = $kueriCari;

				$query= "SELECT * FROM buku $kueriCari";
				$result=mysqli_query($db, $query);
				// end filter

				foreach ($result as $buku) {

					$harga_database = $buku['harga'];
					$format_harga = number_format($harga_database,0,",",".")
					?>
					<div class="batas-card col-12 col-sm-6 col-lg-4 p-2">
						<div class="card shadow-sm">
							<div class="card-body">
								<h5 class="card-title"><?=$buku['nama_buku']?></h5>
								<p class="card-text">

								</p>
								<ul type="square">
									<li>
										<a class="mb-2 text-decoration-none text-dark">ID Buku : <?=$buku['id_buku']?></a>
									</li>
									<li>
										<a class="mb-2 text-decoration-none text-dark">Penerbit : <?=$buku['penerbit']?></a>
									</li>
									<li>
										<a class="mb-2 text-decoration-none text-dark text-capitalize">Kategori : <?=$buku['kategori']?></a>
									</li>
									<li>
										<a class="mb-2 text-decoration-none text-dark">Stok : <?=$buku['stok']?></a>
									</li>
								</ul>
								<a class="harga text-decoration-none text-dark fw-bolder fs-4">Rp <?=$format_harga?></a>
								<a href="#" class="beli card-link btn btn-success">Beli Buku</a>

								<div class="clear"></div>

							</div>
						</div>	
					</div>
				<? } ?>

			</div>
		</div>
	</div>
</body>
<?
require('assets/config/script.php');
?>
</html>