<?
// import koneksi
require_once('assets/koneksi.php');

//cek terbentuknya variable serta men set variable
if (isset($_GET['id_penerbit'])) {
	$id_penerbit = $_GET['id_penerbit'];
}
else {
	echo "ID tidak ditemukan! <a href='admin.php'>Kembali</a>";
	exit();
} //status error

// Query Get data produk
$query = "DELETE FROM penerbit WHERE id_penerbit = '$id_penerbit'";

// eksekusi Query
$result = mysqli_query($db,$query);

if (!$result) {
	exit("Gagal Menghapus Data!");
}
else{
header("Location:admin.php");
}
?>