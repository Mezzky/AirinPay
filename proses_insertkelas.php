<?php
    include('koneksi.php');

    $id = $_POST['idkelas'];
    $namakelas = $_POST['namakelas'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_kelas VALUES ('$id', '$namakelas')");

    if(!$query){
        die ("gagal menambah data:". mysqli_errno ($koneksi). "-". mysqli_error ($koneksi));
    } else{
        echo "<script>alert('Data Berhasil Ditambahkan');document.location.href='view_kelas.php';</script>";
    }