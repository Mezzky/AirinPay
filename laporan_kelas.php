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
    <title>Print Data Kelas</title>
    <style>
        .ttd-box{
            float: right;
            margin-right: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    $kelas = $_POST['kelas'];
    $tahun = $_POST['tahun'];
    $angkatan = $_POST['angkatan'];
    $queryBulan = mysqli_query($koneksi, "SELECT bulan FROM tb_pembayaran GROUP BY bulan ORDER BY idpembayaran");
    $querySiswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_spp USING(idspp) WHERE idkelas = $kelas AND tahun_angkatan = '$tahun' ORDER BY namasiswa ASC");
    $queryPembayaran = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_spp USING(idspp) INNER JOIN tb_kelas USING(idkelas) INNER JOIN tb_pembayaran USING(nis) WHERE idkelas = $kelas AND tahun_angkatan = '$tahun' AND angkatan = '$angkatan'");
    $queryTerbayar = mysqli_query($koneksi, "SELECT namasiswa, SUM(jumlah_bayar) FROM tb_siswa INNER JOIN tb_spp USING(idspp) INNER JOIN tb_kelas USING(idkelas) INNER JOIN tb_pembayaran USING(nis) WHERE idkelas = $kelas AND tahun_angkatan = '$tahun' AND angkatan = '$angkatan' AND (jumlah_bayar IS NOT NULL OR jumlah_bayar IS NULL) GROUP BY namasiswa ORDER BY namasiswa ASC");
    $queryNominal = mysqli_query($koneksi, "SELECT nominal FROM tb_siswa INNER JOIN tb_spp USING(idspp) INNER JOIN tb_kelas USING(idkelas) INNER JOIN tb_pembayaran USING(nis) WHERE idkelas = $kelas AND tahun_angkatan = '$tahun' AND angkatan = '$angkatan'");
    $dataNominal = mysqli_fetch_assoc($queryNominal);
    $nominal = (int) $dataNominal['nominal'] * 12;
    ?>
    <center>
        <h1>SMK TI BALI GLOBAL DENPASAR</h1>
        <h3>Jl. Tukad Citarum No.44, Dauh Puri Klod, Denpasar Selatan, Kota Denpasar, Bali 80234</h3>
        <hr>
        <h2>Laporan Pembayaran SPP Kelas</h2>
        <h3>Tahun Angkatan <?php echo $tahun; ?></h3>
    </center>
    <span>
        <?php $queryKelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE idkelas = $kelas"); ?>
        <?php $dataKelas = mysqli_fetch_assoc($queryKelas); ?>
        Kelas : <?php echo $dataKelas['namakelas']; ?>
    </span>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <?php while ($dataBulan = mysqli_fetch_assoc($queryBulan)) : ?>
                    <th><?= $dataBulan['bulan'] ?></th>
                <?php endwhile; ?>
                <th>Total</th>
                <th>Tagihan</th>
            </tr>
            <?php
            $no = 1;
            $rowSiswa = [];
            while ($dataSiswa = mysqli_fetch_assoc($querySiswa)) {
                $rowSiswa[] = $dataSiswa;
            }

            $rowPembayaran = [];
            while ($dataPembayaran = mysqli_fetch_assoc($queryPembayaran)) {
                $rowPembayaran[] = $dataPembayaran;
            }

            $rowTerbayar = [];
            while ($dataTerbayar = mysqli_fetch_assoc($queryTerbayar)) {
                $rowTerbayar[] = $dataTerbayar;
            }


            foreach ($rowSiswa as $siswa) :
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $siswa['nis'] ?></td>
                    <td><?= $siswa['namasiswa'] ?></td>
                    <?php foreach ($rowPembayaran as $bayar) : ?>
                        <?php if ($bayar['namasiswa'] == $siswa['namasiswa']) : ?>
                            <td>Rp<?= number_format($bayar['jumlah_bayar'], 0, ',', '.'); ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php foreach ($rowTerbayar as $terbayar) : ?>
                        <?php if ($terbayar['namasiswa'] == $siswa['namasiswa']) : ?>
                            <td>Rp<?= number_format($terbayar['SUM(jumlah_bayar)'], 0, ',', '.'); ?></td>
                            <td>Rp<?= number_format($nominal - $terbayar['SUM(jumlah_bayar)'], 0, ',', '.'); ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </thead>
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