<?php
include "koneksi.php";

echo $nama = isset($_GET['nama']) ? $_GET['nama'] : '';
echo $lapangan = isset($_GET['lapangan']) ? $_GET['lapangan'] : '';
echo $date = isset($_GET['date']) ? $_GET['date'] : '';
echo $lamasewa = isset($_GET['lamasewa']) ? $_GET['lamasewa'] : '';
echo $waktuawal = isset($_GET['waktuawal']) ? $_GET['waktuawal'] : '';
echo $waktuakhir = isset($_GET['waktuakhir']) ? $_GET['waktuakhir'] : '';
echo $jmlSewa = isset($_GET['jmlSewa']) ? $_GET['jmlSewa'] : '';
echo $jmlTotal = isset($_GET['jmlTotal']) ? $_GET['jmlTotal'] : '';

if (true) {
    $sql = "INSERT INTO `tbl_booking` (`id`, `nama`, `lapangan`, `tanggal`, `lama_sewa`, `time_mulai`, `time_akhir`, `harga_sewa`, `total_sewa`) VALUES (NULL,'$nama', '$lapangan', '$date', '$lamasewa', '$waktuawal', '$waktuakhir', '$jmlSewa', '$jmlTotal')";
    if ($conn->query($sql) === TRUE) {
        echo "OK";
        header("Location: cari.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: cari.php");
    }
}
$conn->close();
