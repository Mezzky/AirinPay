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
    <title>Halaman Pembayaran</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="table-container">
        <div class="table-tittle">
            <!-- Mencari NIS Siswa -->
            <h2>PEMBAYARAN</h2>
            <div class="tittle-right">
                <form class="form-bayar" action="" method="GET" autocomplete="off">
                    <input type="text" name="nis" placeholder="Cari Nis Siswa..">
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>
    
            <!-- Hasil Pencarian NIS Siswa -->
            <?php if (isset($_GET['nis'])) : ?>
            <?php $nis = $_GET['nis']; ?>
            <?php $querySiswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(idkelas) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis"); ?>
            <?php $dataSiswa = mysqli_fetch_assoc($querySiswa); ?>
            <table cellpadding="5" cellspacing="0" class="biodata">
                <tbody>
                    <tr>
                        <td>NIS </td>
                        <td>: </td>
                        <td><?php echo $dataSiswa['nis']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Siswa </td>
                        <td>: </td>
                        <td><?php echo $dataSiswa['namasiswa']; ?></td>
                    </tr>
                    <tr>
                        <td>Kelas </td>
                        <td>: </td>
                        <td><?php echo $dataSiswa['namakelas']; ?></td>
                    </tr>
                    <tr>
                        <td>Angkatan </td>
                        <td>: </td>
                        <td><?php echo $dataSiswa['tahun_angkatan'] ?></td>
                    </tr>
                </tbody>
            </table>
            <br><br>
    
            <!-- Tampilan Tabel Pembayaran -->
            <table class="pembayaran" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>NAMA SISWA</th>
                        <th>KELAS</th>
                        <th>BULAN</th>
                        <th>TAHUN ANGKATAN</th>
                        <th>BAYAR</th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php
                    $query = "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_kelas USING(idkelas) INNER JOIN tb_spp USING(idspp) WHERE nis = $nis";
                    $result = mysqli_query($koneksi, $query);
                    if (!$result) {
                        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                    }
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
    
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nis']; ?></td>
                            <td><?php echo $row['namasiswa']; ?></td>
                            <td><?php echo $row['namakelas']; ?></td>
                            <td><?php echo $row['bulan']; ?></td>
                            <td><?php echo $row['tahun_angkatan']; ?></td>
                            <td>
                                <?php if ($row['jumlah_bayar'] == $row['nominal']) : ?>
                                    <p>Lunas</p>
                                <?php else : ?>
                                    <div class="btn">
                                        <a class="bayar" href="proses_pembayaran.php?idpembayaran=<?= $row['idpembayaran']; ?>&nis=<?= $row['nis']; ?>" >Bayar</a>
                                    </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>