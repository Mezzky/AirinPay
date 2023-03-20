<?php
include("koneksi.php");
include("bar/navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="table-container">
        <div class="table-tittle">
            <h1>DATA RIWAYAT PEMBAYARAN</h1>
        </div>

        <div class="laporan-container">
            <!-- Laporan Kelas -->
            <div class="form-box">
                <h2>Laporan SPP Kelas</h2>
                <form action="laporan_kelas.php" method="POST">
                    <select name="kelas" id="">
                        <option value="" selected>Kelas</option>
                        <?php
                        $querykelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                        while ($rowkelas  = mysqli_fetch_assoc($querykelas)) {
                        ?>
                            <option value="<?php echo $rowkelas['idkelas']; ?>"><?php echo $rowkelas['namakelas'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
    
                    <select name="tahun">
                        <option value="" selected>Tahun</option>
                        <?php
                        $queryTahun = mysqli_query($koneksi, "SELECT * FROM tb_spp");
                        while ($rowTahun = mysqli_fetch_assoc($queryTahun)) {
                        ?>
                            <option value="<?php echo $rowTahun['tahun_angkatan']; ?>"><?php echo $rowTahun['tahun_angkatan'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
    
                    <select name="angkatan">
                        <option value="" selected>Angkatan</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        ?>
                    </select>
                    <button type="submit">Cetak Laporan Kelas</button>
                </form>
            </div>

            <!-- Laporan Siswa -->
            <div class="form-box">
                <h2>Laporan SPP Siswa</h2>
                <form action="laporan_siswa.php" method="POST">
                    <input type="text" name="nis" placeholder="Masukkan NIS Siswa">
                    <button type="submit">Cetak Laporan Siswa</button>
                    <br>
                </form>
            </div>
        </div>

        <table cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Petugas</th>
                    <th>NIS Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Bulan</th>
                    <th>Nominal</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $querypay = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_petugas USING(nip) WHERE jumlah_bayar IS NOT NULL ORDER BY idpembayaran DESC");
                while ($datapay = mysqli_fetch_assoc($querypay)) {
                ?>
                    <tr>
                        <td><?php echo $datapay['namapetugas'] ?></td>
                        <td><?php echo $datapay['nis'] ?></td>
                        <td><?php echo $datapay['namasiswa'] ?></td>
                        <td><?php echo $datapay['tgl'] ?></td>
                        <td><?php echo $datapay['bulan'] ?></td>
                        <td><?php echo $datapay['jumlah_bayar'] ?></td>
                    </tr>
            </tbody>
        <?php } ?>
        </table>
    </div>
</body>

</html>