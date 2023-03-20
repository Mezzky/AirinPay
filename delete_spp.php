<?php
include 'koneksi.php';
$id = $_GET ['idspp'];

$query =mysqli_query ($koneksi, "DELETE FROM tb_spp WHERE idspp= '$id' ");

if (!$query){
    die ("gagal menghapus data:". mysqli_errno ($koneksi). "-" .mysqli_error ($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='view_spp.php';</script>";
}

?>