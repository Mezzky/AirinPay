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
    <title>Tambah Petugas</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="form-container">
        <a href="view_petugas.php">&larr;</a>

        <div class="form-box">
            <h2>Tambahkan Data Petugas</h2>
            <form action="proses_insertpetugas.php" method="POST" autocomplete="off">
                <input type="text" name="nip" id="nip" hidden>
                <div class="input-box">
                    <label for="namapetugas">NAMA PETUGAS</label>
                    <input required type="text" name="namapetugas" id="namapetugas">
                </div>
                <div class="input-box">
                    <label for="telp">NO TELP</label>
                    <input required maxlength="12" type="text" name="telp" id="telp">
                </div>
                <div class="input-box">
                    <label for="username">USERNAME</label>
                    <input required type="text" name="username" id="username">
                </div>
                <div class="input-box">
                    <label for="password">PASSWORD</label>
                    <input required type="text" name="password" id="password">
                </div>
                <div class="input-box">
                    <label for="leveluser">LEVELUSER</label>
                    <select name="leveluser" id="">
                        <?php 
                        $querylevel = mysqli_query($koneksi, "SELECT leveluser FROM tb_petugas");
                        ?>
                        <option value="">Pilih</option>
                        <option value="Admin">Admin</option>
                        <option value="Pegawai">Pegawai</option>
                    </select>
                </div>
                <button type="submit" name="kirim">Tambah</button>
            </form>
        </div>
    </div>
</body>

</html>