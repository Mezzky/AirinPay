<?php
    include('koneksi.php');
    include('bar/navbar.php');

    // Menghitung jumlah siswa dari tabel tb_siswa
    $query_jumlah_siswa = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_siswa FROM tb_siswa");
    $jumlah_siswa = mysqli_fetch_assoc($query_jumlah_siswa);

    // Menghitung jumlah petugas dari tabel tb_petugas
    $query_jumlah_petugas = mysqli_query($koneksi, "SELECT COUNT(*) as jumlah_petugas FROM tb_petugas");
    $jumlah_petugas = mysqli_fetch_assoc($query_jumlah_petugas);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="dashboard-container">
        <?php if(isset($_SESSION['namapetugas'])) : ?>
        <h1>Hallo Selamat Datang! <?= $_SESSION['namapetugas']; ?></h1>
        <?php endif; ?>

        <div class="dash-data">
            <div class="data">
                <div class="count">
                    <img src="./image/siswa-icon.svg" alt="jumlah-siswa">
                    <span id="jumlah-siswa"><?= $jumlah_siswa['jumlah_siswa']; ?></span>
                </div>
                <p>Jumlah Siswa</p>
            </div>

            <div class="data">
                <div class="count">
                    <img src="./image/petugas-icon.svg" alt="jumlah-petugas">
                    <span id="jumlah-petugas"><?= $jumlah_petugas['jumlah_petugas']; ?></span>
                </div>
                <p>Jumlah Petugas</p>
            </div>
        </div>

        <div class="table-content">
            <h2>Transaksi Terakhir</h2>
            <table class="history-dash" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>Petugas</th>
                        <th>NIS Siswa</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Pmbayaran</th>
                        <th>Bulan</th>
                        <th>Nominal</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $querypay = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_petugas USING(nip) WHERE jumlah_bayar IS NOT NULL ORDER BY idpembayaran DESC LIMIT 5");
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
    </div>
</body>

</html>