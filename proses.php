<?php

include("database/koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
    $id = $_POST['id'];
	$nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
	$tlahir = $_POST['tlahir'];
	$handphone = $_POST['handphone'];
    $alasan = $_POST['alasan'];

	
	// buat query
	$sql = "INSERT INTO pendaftar (id, nama, alamat, tlahir, handphone, alasan ) VALUE ('$id','$nama', '$alamat', '$tlahir', '$handphone', '$alasan')";
	$query = mysqli_query($conn, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: daftar.html');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: daftar.html');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
