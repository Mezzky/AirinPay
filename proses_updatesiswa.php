<?php
    include('koneksi.php');

    $id = $_POST['nis'];
    $idspp = $_POST['idspp'];
    $idkelas = $_POST['idkelas'];
    $nama = $_POST['namasiswa'];
    $telp = $_POST['telp'];
    $pass = $_POST['password'];

    $query = mysqli_query($koneksi, "UPDATE tb_siswa SET idspp = '$idspp', idkelas='$idkelas', namasiswa = '$nama', telp = '$telp', password = '$pass'  WHERE nis = '$id' ");

    if(!$query){
        die ("gagal Mengubah Data:". mysqli_errno ($koneksi). "-". mysqli_error ($koneksi));
    } else{
        echo "<script>alert('Data Berhasil Diubah');document.location.href='view_siswa.php';</script>";
    }