<?
// import koneksi
require_once('../assets/koneksi.php');

//mendapatkan data ID
if (isset($_POST['idPenerbit'])) {
	$idPenerbit = $_POST['idPenerbit'];
}
else {
	echo "ID tidak ditemukan! <a href='../edit_buku.php'>Kembali</a>";
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


// menyiapkan Query MySQL untuk dieksekusi
$query = "UPDATE penerbit SET id_penerbit = '{$idPenerbit}', nama = '{$nama}', alamat = '{$alamat}', kota = '{$kota}', telepon = '{$telepon}' WHERE id_penerbit = '{$idPenerbit}'";

// mengeksekusi MySQL Query
$insert=mysqli_query($db,$query);
// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam mengubah data. <a href='../edit_penerbit.php'>Kembali</a>";
}
else{
	header("Location: ../admin.php");
}

?>