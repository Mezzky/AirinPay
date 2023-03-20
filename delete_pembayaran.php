<?php
include 'koneksi.php';
$id = $_GET ['idpembayaran'];


$query = "DELETE FROM tb_pembayaran WHERE idpembayaran='$id' ";
$hasil_query =mysqli_query ($koneksi, $query);

if (!$hasil_query){
    die ("gagal menghapus data:". mysqli_errno ($koneksi). "-" .mysqli_error ($koneksi));
} else {
    "<script>alert('Data berhasil dihapus.');window.location='view_history'.php';</script>";
}
?>
