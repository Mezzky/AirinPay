<?php
include("koneksi.php");

$nis = $_POST['nis'];
$spp = $_POST['idspp'];
$kelas = $_POST['idkelas'];
$nama = $_POST['namasiswa'];
$telp = $_POST['telp'];
$pass = $_POST['password'];

$querySiswa = "INSERT INTO tb_siswa VALUES ('$nis', '$spp', '$kelas', '$nama', '$telp', '$pass')";
$resultSiswa = mysqli_query($koneksi, $querySiswa);

$queryPembayaran = "INSERT INTO tb_pembayaran VALUES 
                    (null, null, $nis, null, 'Juli', null, 'X'),
                    (null, null, $nis, null, 'Agustus', null, 'X'),
                    (null, null, $nis, null, 'September', null, 'X'),
                    (null, null, $nis, null, 'Oktober', null, 'X'),
                    (null, null, $nis, null, 'November', null, 'X'),
                    (null, null, $nis, null, 'Desember', null, 'X'),
                    (null, null, $nis, null, 'Januari', null, 'X'),
                    (null, null, $nis, null, 'Februari', null, 'X'),
                    (null, null, $nis, null, 'Maret', null, 'X'),
                    (null, null, $nis, null, 'April', null, 'X'),
                    (null, null, $nis, null, 'Mei', null, 'X'),
                    (null, null, $nis, null, 'Juni', null, 'X'),
                    
                    (null, null, $nis, null, 'Juli', null, 'XI'),
                    (null, null, $nis, null, 'Agustus', null, 'XI'),
                    (null, null, $nis, null, 'September', null, 'XI'),
                    (null, null, $nis, null, 'Oktober', null, 'XI'),
                    (null, null, $nis, null, 'November', null, 'XI'),
                    (null, null, $nis, null, 'Desember', null, 'XI'),
                    (null, null, $nis, null, 'Januari', null, 'XI'),
                    (null, null, $nis, null, 'Februari', null, 'XI'),
                    (null, null, $nis, null, 'Maret', null, 'XI'),
                    (null, null, $nis, null, 'April', null, 'XI'),
                    (null, null, $nis, null, 'Mei', null, 'XI'),
                    (null, null, $nis, null, 'Juni', null, 'XI'),
                    
                    (null, null, $nis, null, 'Juli', null, 'XII'),
                    (null, null, $nis, null, 'Agustus', null, 'XII'),
                    (null, null, $nis, null, 'September', null, 'XII'),
                    (null, null, $nis, null, 'Oktober', null, 'XII'),
                    (null, null, $nis, null, 'November', null, 'XII'),
                    (null, null, $nis, null, 'Desember', null, 'XII'),
                    (null, null, $nis, null, 'Januari', null, 'XII'),
                    (null, null, $nis, null, 'Februari', null, 'XII'),
                    (null, null, $nis, null, 'Maret', null, 'XII'),
                    (null, null, $nis, null, 'April', null, 'XII'),
                    (null, null, $nis, null, 'Mei', null, 'XII'),
                    (null, null, $nis, null, 'Juni', null, 'XII')";
$resultPembayaran = mysqli_query($koneksi, $queryPembayaran);

if (!$resultSiswa && !$resultPembayaran) {
    die("Query Gagal Dijalankan : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data Berhasil Ditambah');window.location = 'view_siswa.php';</script>";
}
