<?php
include ('koneksi.php');

session_start();

$id = $_GET['nip'];

$hasil_query = mysqli_query ($koneksi, "DELETE FROM tb_petugas WHERE nip='$id' ");

if (!$hasil_query){
    die ("gagal menghapus data:". mysqli_errno ($koneksi). "-". mysqli_error ($koneksi));
} else {
   echo "<script>alert('Data berhasil dihapus.'); window.location='view_petugas.php';</script>";
}