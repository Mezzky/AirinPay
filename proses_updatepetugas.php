<?php
    include('koneksi.php');

    $id = $_POST['nip'];
    $nama = $_POST['namapetugas'];
    $telp = $_POST['telp'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $level = $_POST['leveluser'];

    $query = mysqli_query($koneksi, "UPDATE tb_petugas SET namapetugas = '$nama', telp = '$telp', username = '$user', password = '$pass', leveluser = '$level' WHERE nip = '$id' ");

    if(!$query){
        die ("gagal Mengubah Data:". mysqli_errno ($koneksi). "-". mysqli_error ($koneksi));
    } else{
        echo "<script>alert('Data Berhasil Diubah');document.location.href='view_petugas.php';</script>";
    }