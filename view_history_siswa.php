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
    <title>History</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="table-container">
        <div class="table-tittle">
            <h1>DATA RIWAYAT PEMBAYARAN</h1>
        </div>

        <table cellpadding="5" cellspacing="0">
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
                if(isset($_SESSION['nis'])) {
                    $nis = $_SESSION['nis'];
                    $querypay = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_petugas USING(nip) WHERE nis = '$nis'");
                } else{
                    $querypay = mysqli_query($koneksi, "SELECT * FROM tb_pembayaran INNER JOIN tb_siswa USING(nis) INNER JOIN tb_petugas USING(nip) WHERE jumlah_bayar IS NOT NULL");
                }

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