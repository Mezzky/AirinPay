<?php
include('koneksi.php');

$id = $_POST['idspp'];
$tahunAngkatan = $_POST['tahun_angkatan'];
$nominal = $_POST['nominal'];

$query = mysqli_query($koneksi, "UPDATE tb_spp SET tahun_angkatan = '$tahunAngkatan', nominal = '$nominal'  WHERE idspp = '$id'");

if (!$query) {
    die("gagal Mengubah Data:" . mysqli_errno($koneksi) . "-" . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data Berhasil Diubah');document.location.href='view_spp.php';</script>";
}
