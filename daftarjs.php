<?php
require_once('database/koneksi.php');

// menerima data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlahir = $_POST['tlahir'];
$handphone = $_POST['handphone'];
$alasan = $_POST['alasan'];

// memasukkan data ke database
$query = "INSERT INTO pendaftar (id, nama, alamat, tlahir, handphone, alasan) VALUES ('$id', '$nama', '$alamat', '$tlahir', '$handphone', '$alasan')";

if (mysqli_query($conn, $query)) {
    echo "data berhasil";
} else {
     echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
