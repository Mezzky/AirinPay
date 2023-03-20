<?php
    include('koneksi.php');
    include('bar/navbar.php');
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
        <?php if(isset($_SESSION['namasiswa'])) : ?>
        <h1>Hallo Selamat Datang! <?= $_SESSION['namasiswa']; ?></h1>
        <?php endif; ?>

        <!-- <div class="dash-data">
            <div class="data">
                <div class="count">
                    <img src="./image/siswa-icon.svg" alt="jumlah-siswa">
                    <span id="jumlah-siswa">10</span>
                </div>
                <p>Jumlah Siswa</p>
            </div>

            <div class="data">
                <div class="count">
                    <img src="./image/petugas-icon.svg" alt="jumlah-petugas">
                    <span id="jumlah-petugas">05</span>
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
                    $querypay = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_petugas USING(nip) WHERE jumlah_bayar IS NOT NULL LIMIT 5");
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
    </div> -->
</body>

</html>