<?php 
    include("koneksi.php");

    $nip = $_POST['nip'];
    $nama = $_POST['namapetugas'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['leveluser'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_petugas VALUES ('$nip', '$nama', '$telp', '$username', '$password', '$level') ");

    if(!$query) {
    die("Query Gagal Dijalankan : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }else {
    echo "<script>alert('Data Berhasil Ditambah');window.location = 'view_petugas.php';</script>";
}    
