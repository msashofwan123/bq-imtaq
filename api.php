<?php

include_once('database/koneksi.php');

// Cek koneksi ke database
if (!$conn) {
  // Jika gagal terhubung, tampilkan pesan kesalahan dan set respon code ke 500 (Internal Server Error)
  http_response_code(500);
  die("Gagal terhubung ke database: " . mysqli_connect_error());
}

// Query untuk menampilkan data dari tabel
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

// Cek apakah data kosong atau tidak
if (empty($data)) {
  // Jika data kosong, set respon code ke 404 (Not Found)
  http_response_code(404);
  $respon_status = "Data tidak ditemukan";
} else {
  // Jika data tidak kosong, set respon code ke 200 (OK)
  http_response_code(200);
  $respon_status = "Data ditemukan";
}

// Menampilkan data dalam format JSON beserta respon code dan respon status
echo json_encode(array("status" => $respon_status, "code" => http_response_code(), "data" => $data));

?>
