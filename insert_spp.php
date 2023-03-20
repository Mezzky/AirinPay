<?php
session_start();
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>

    <body>
        <div class="form-container">
            <a href="view_spp.php">&larr;</a>

            <div class="form-box">
                <h2>Tambahkan Data SPP</h2>
                <form action="proses_insertspp.php" method="POST" autocomplete="off">
                <!-- <input type="hidden" name="idspp"> -->
                        <div class="input-box">
                            <label for="tahunangkatan">TAHUN ANGKATAN</label>
                            <input required type="text" name="tahun_angkatan" id="tahunangkatan">
                        </div>
                        <div class="input-box">
                            <label for="nominal">NOMINAL</label>
                            <input required type="text" name="nominal" id="nominal">
                        </div>
                    <button type="submit" name="kirim">Tambah</button>
                </form>

    </body>

</html>