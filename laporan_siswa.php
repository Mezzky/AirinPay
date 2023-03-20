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
    <title>Print Data</title>
    <style>
        .ttd-box{
            float: right;
            margin-right: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <center>
        <h1>SMK TI BALI GLOBAL DENPASAR</h1>
        <h3>Jl. Tukad Citarum No.44, Dauh Puri Klod, Denpasar Selatan, Kota Denpasar, Bali 80234</h3>
        <hr>
        <h2>Laporan Pembayaran SPP Siswa</h2>
        <?php $nis = $_POST['nis']; ?>
        <?php $rowTahun = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT tahun_angkatan FROM tb_siswa INNER JOIN tb_spp USING(idspp) WHERE nis = $nis")) ?>
        <h3>Tahun Angkatan <?php echo $rowTahun['tahun_angkatan']; ?></h3>
    </center>
    <table>
        <?php $rowSiswa = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(idkelas) WHERE nis = $nis")) ?>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><?php echo $rowSiswa['nis']; ?></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td> : </td>
            <td><?php echo $rowSiswa['namasiswa']; ?></td>
        </tr>
        <tr>
            <td>Kelas </td>
            <td> : </td>
            <td><?php echo $rowSiswa['namakelas']; ?></td>
        </tr>
    </table>
    <br>
    <table border="2">
        <thead>
            <?php $queryBulan = mysqli_query($koneksi, "SELECT bulan FROM tb_pembayaran GROUP BY bulan ORDER BY idpembayaran"); ?>
            <tr>
                <th>Angkatan</th>
                <?php while ($dataBulan = mysqli_fetch_assoc($queryBulan)) : ?>
                    <th><?= $dataBulan['bulan'] ?></th>
                <?php endwhile; ?>
                <th>Total</th>
                <th>Tagihan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $queryPembayaranX = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis AND angkatan = 'X'");
            $queryPembayaranXI = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis AND angkatan = 'XI'");
            $queryPembayaranXII = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis AND angkatan = 'XII'");
            
            $terbayarX = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis AND angkatan = 'X' AND (jumlah_bayar IS NOT NULL OR jumlah_bayar IS NULL)"));
            $terbayarXI = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis AND angkatan = 'XI' AND (jumlah_bayar IS NOT NULL OR jumlah_bayar IS NULL)"));
            $terbayarXII = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis AND angkatan = 'XII' AND (jumlah_bayar IS NOT NULL OR jumlah_bayar IS NULL)"));

            $nominal =  mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT nominal FROM tb_siswa INNER JOIN tb_spp USING(idspp) WHERE nis = $nis"));
            $tagihan = (int) $nominal['nominal'] * 12;

            $rowPembayaranX = [];
            while ($dataPembayaranX = mysqli_fetch_assoc($queryPembayaranX)) {
                $rowPembayaranX[] = $dataPembayaranX;
            }

            $rowPembayaranXI = [];
            while ($dataPembayaranXI = mysqli_fetch_assoc($queryPembayaranXI)) {
                $rowPembayaranXI[] = $dataPembayaranXI;
            }

            $rowPembayaranXII = [];
            while ($dataPembayaranXII = mysqli_fetch_assoc($queryPembayaranXII)) {
                $rowPembayaranXII[] = $dataPembayaranXII;
            }
            ?>
            <tr>
                <td>X</td>
                <?php foreach ($rowPembayaranX as $bayarX) : ?>
                    <td>Rp<?= number_format($bayarX['jumlah_bayar'], 0, ',', '.'); ?></td>
                <?php endforeach; ?>
                <td>Rp<?= number_format($terbayarX['SUM(jumlah_bayar)']); ?></td>
                <td>Rp<?= number_format($tagihan - $terbayarX['SUM(jumlah_bayar)']); ?></td>
            </tr>
            <tr>
                <td>XI</td>
                <?php foreach ($rowPembayaranXI as $bayarXI) : ?>
                    <td>Rp<?= number_format($bayarXI['jumlah_bayar'], 0, ',', '.'); ?></td>
                <?php endforeach; ?>
                <td>Rp<?= number_format($terbayarXI['SUM(jumlah_bayar)']); ?></td>
                <td>Rp<?= number_format($tagihan - $terbayarXI['SUM(jumlah_bayar)']); ?></td>
            </tr>
            <tr>
                <td>XII</td>
                <?php foreach ($rowPembayaranXII as $bayarXII) : ?>
                    <td>Rp<?= number_format($bayarXII['jumlah_bayar'], 0, ',', '.'); ?></td>
                <?php endforeach; ?>
                <td>Rp<?= number_format($terbayarXII['SUM(jumlah_bayar)']); ?></td>
                <td>Rp<?= number_format($tagihan - $terbayarXII['SUM(jumlah_bayar)']); ?></td>
            </tr>
        </tbody>
    </table>
    <p>Note: Jika total Bayar = 0, berarti belum dibayar</p>
    <div class="ttd-box">
        <p>Denpasar, <?= date('d-m-Y'); ?></p>
        <br>
        <?php if (isset($_SESSION['namapetugas'])) : ?>
        <p><?= $_SESSION["namapetugas"]; ?></p>
        <?php endif; ?>
    </div>

    <script>
        window.print();
        window.onafterprint = () => history.back();
    </script>

</body>

</html>