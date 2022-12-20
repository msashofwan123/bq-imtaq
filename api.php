<?php

use LDAP\Result;

include_once('database/koneksi.php');

$sql = "SELECT * FROM pendaftar";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $record = array(
        "id" => $row['id'],
        "nama" => $row['nama'],
        "alamat" => $row['alamat'],
        "tlahir" => $row['tlahir'],
        "handphone" => $row['handphone'],
        "alasan" => $row['alasan']
    );
    echo json_encode($record) . "\n";
}
