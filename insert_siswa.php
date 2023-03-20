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
    <div class="form-container">
    <a href="view_siswa.php">&larr;</a>

        <div class="form-box">
            <h2>Tambahkan Data Siswa</h2>
            <form action="proses_insertsiswa.php" method="POST" autocomplete="off">
                <div class="input-box">
                    <label for="nis">NIS</label>
                    <input required maxlength="4" type="text" name="nis" id="nis">
                </div>
                <div class="input-box">
                    <label for="idspp">ID SPP</label>
                    <select required name="idspp" id="idspp">
                        <?php
                        $queryspp = mysqli_query($koneksi, "SELECT * FROM tb_spp ORDER BY idspp ASC");
                        while ($hasilspp = mysqli_fetch_assoc($queryspp)) {
                        ?>
                            <option value="<?php echo $hasilspp['idspp']; ?>"><?php echo $hasilspp['tahun_angkatan']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="idkelas">ID KELAS</label>
                    <select required name="idkelas" id="idkelas">
                        <option value="">Pilih Kelas</option>
                        <?php
                        $querykelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas ORDER BY idkelas");
                        while ($rows = mysqli_fetch_assoc($querykelas)) {
                        ?>
                            <option value="<?php echo $rows['idkelas']; ?>"><?php echo $rows['namakelas']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="namasiswa">NAMA</label>
                    <input required type="text" name="namasiswa" id="namasiswa">
                </div>
                <div class="input-box">
                    <label for="telp">NO TELP</label>
                    <input required maxlength="12" type="text" name="telp" id="telp">
                </div>
                <div class="input-box">
                    <label for="password">PASSWORD</label>
                    <input required type="text" name="password" value="globaliti" id="password" readonly>
                </div>
                <button type="submit" name="kirim">Tambah</button>
            </form>
        </div>
    </div>

</body>

</html>