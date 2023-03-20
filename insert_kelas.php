<?php
    include("koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="form-container">
        <a href="view_kelas.php">&larr;</a>

        <div class="form-box">
            <h2>Tambahkan Data Kelas</h2>
            <form action="proses_insertkelas.php" method="POST" autocomplete="off">
                <div class="input-box">
                    <label for="id" hidden>ID</label>
                    <input type="text" name="idkelas" id="id" hidden>
                </div>
                <div class="input-box">
                    <label for="namakelas">KELAS</label>
                    <input required type="text" name="namakelas" id="namakelas">
                </div>
                <button type="submit" name="kirim">Tambah</button>
            </form>
        </div>
    </div>
</body>

</html>