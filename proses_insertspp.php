<?php
include("koneksi.php");

$tahunangkatan = $_POST['tahun_angkatan'];
$nominal = $_POST['nominal'];

$query = "INSERT INTO tb_spp VALUES (null, '$tahunangkatan', '$nominal')";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Gagal Dijalankan : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data Berhasil Ditambah');window.location = 'view_spp.php';</script>";
}
