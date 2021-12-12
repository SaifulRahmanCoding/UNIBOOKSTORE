<?
// import koneksi
require_once('../assets/koneksi.php');

//cek terbentuknya variable serta men set variable
if (isset($_POST['idPenerbit'])) {
	$idPenerbit = $_POST['idPenerbit'];
}
else {
	echo "Error dari idPenerbit";
	exit();
} //status error

if (isset($_POST['nama'])) {
	$nama = $_POST['nama'];
}
else {
	echo "Error dari Nama Penerbit";
	exit();
} //status error

if (isset($_POST['alamat'])) {
	$alamat = $_POST['alamat'];
}
else {
	echo "Error dari alamat";
	exit();
} //status error

if (isset($_POST['kota'])) {
	$kota = $_POST['kota'];
}
else {
	echo "Error dari kota";
	exit();
} //status error

if (isset($_POST['telepon'])) {
	$telepon = $_POST['telepon'];
}
else {
	echo "Error dari telepon";
	exit();
} //status error

// Menyiapkan Query MySQL untuk dieksekusi
$query = "INSERT INTO penerbit (id_penerbit, nama, alamat, kota, telepon) VALUES ('{$idPenerbit}', '{$nama}', '{$alamat}', '{$kota}', '{$telepon}')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data ke database. <a href='../form_penerbit.php'>Kembali</a>";
}
else{
	header("Location: ../admin.php");
}
?>