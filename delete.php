<?php
// File delete.php

// Koneksi ke database
require_once('database/koneksi.php');

// Mendapatkan ID data dari request POST
$id = $_POST['id'];

// Buat query untuk menghapus data
$query = "DELETE FROM pendaftar WHERE id = $id";

// Jalankan query
mysqli_query($conn, $query);

// Tutup koneksi
mysqli_close($conn);
?>