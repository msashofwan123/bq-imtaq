<?php

use LDAP\Result;

include_once('database/koneksi.php');   

$query = "SELECT * FROM pendaftar";

// Eksekusi query dan simpan hasilnya dalam variabel
$result = mysqli_query($conn, $query);

// Inisialisasi array untuk menampung data
$data = array();

// Memasukkan data ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

// Menutup koneksi ke database
mysqli_close($conn);

// Menampilkan data dalam format JSON
echo json_encode($data);