<?
$halaman = "admin";
require_once('assets\koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halman Admin</title>
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

	<div id="konten-admin" class="px-3 px-sm-4 px-lg-0">

		<? require('komponen/tab-admin.php'); ?>

		<div id="list-katalog" class="p-0 mt-4">
			<div class="container-admin">

				<!-- list -->
				<div class="tab-content mb-3 mb-sm-5" id="myTabContent">

					<? 
					require('komponen/list-buku.php'); 
					require('komponen/list-penerbit.php'); 
					?>					

				</div>
				<!-- end tab nav -->

			</div>
		</div>
	</div>

</body>
<?
require('assets/config/script.php');
?>
</html>


