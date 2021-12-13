<?
// import koneksi
require_once('../assets/koneksi.php');

//mendapatkan data ID
if (isset($_POST['idBuku'])) {
	$idBuku = $_POST['idBuku'];
}
else {
	echo "ID tidak ditemukan! <a href='../edit_buku.php'>Kembali</a>";
	exit();
}


//cek terbentuknya variable serta men set variable
if (isset($_POST['idBuku'])) {
	$idBuku = $_POST['idBuku'];
}
else {
	echo "Error dari idBuku";
	exit();
} //status error

if (isset($_POST['namaBuku'])) {
	$namaBuku = $_POST['namaBuku'];
}
else {
	echo "Error dari Nama Buku";
	exit();
} //status error

if (isset($_POST['kategori'])) {
	$kategori = $_POST['kategori'];
}
else {
	echo "Error dari kategori";
	exit();
} //status error

if (isset($_POST['harga'])) {
	$harga = $_POST['harga'];
}
else {
	echo "Error dari harga";
	exit();
} //status error

if (isset($_POST['stok'])) {
	$stok = $_POST['stok'];
}
else {
	echo "Error dari stok";
	exit();
} //status error

if (isset($_POST['penerbit'])) {
	$penerbit = $_POST['penerbit'];
}
else {
	echo "Error dari penerbit";
	exit();
} //status error


// menyiapkan Query MySQL untuk dieksekusi
$query = "UPDATE buku SET id_buku = '{$idBuku}', kategori = '{$kategori}', nama_buku = '{$namaBuku}', harga = '{$harga}', stok = '{$stok}', penerbit = '{$penerbit}' WHERE id_buku = '{$idBuku}'";

// mengeksekusi MySQL Query
$insert=mysqli_query($db,$query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam mengubah data. <a href='../edit_buku.php'>Kembali</a>";
}
else{
	header("Location: ../admin.php");
}

?>