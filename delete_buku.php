<?
// import koneksi
require_once('assets/koneksi.php');

//cek terbentuknya variable serta men set variable
if (isset($_GET['id_buku'])) {
	$id_buku = $_GET['id_buku'];
}
else {
	echo "ID tidak ditemukan! <a href='admin.php'>Kembali</a>";
	exit();
} //status error

// Query Get data produk
$query = "DELETE FROM buku WHERE id_buku = '$id_buku'";

// eksekusi Query
$result = mysqli_query($db,$query);

if (!$result) {
	exit("Gagal Menghapus Data!");
}else{
header("Location:admin.php");
}
?>