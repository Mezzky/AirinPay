<?php 
include 'koneksi.php';
$id = $_GET["nis"];
  
$query = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nis='$id'");

if (!$query ) {
    die ("gagal menghapus data:". mysqli_errno ($koneksi). "-". mysqli_error ($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='view_siswa.php';</script>";
}

?>