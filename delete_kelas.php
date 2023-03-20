<?php
include 'koneksi.php';
$id = $_GET['idkelas'];

$query = "DELETE FROM tb_kelas WHERE idkelas='$id'";
$hasil_query = mysqli_query($koneksi, $query);

if (!$hasil_query) {
    die("gagal menghapus data:". mysqli_errno($koneksi). "-" .mysqli_error($koneksi));
} else {
    echo "<script>
        alert('Data berhasil dihapus.');
        window.location = 'view_kelas.php';
    </script>";
}

