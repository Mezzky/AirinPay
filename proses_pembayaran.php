<?php
session_start();
    include("koneksi.php");

    $idpembayaran = $_GET['idpembayaran'];
    $nip = $_SESSION['nip'];
    $nis = $_GET['nis'];
    $tgl = date('Y-m-d');

    $queryNominal = mysqli_query($koneksi, "SELECT nominal FROM tb_siswa INNER JOIN tb_spp USING(idspp) WHERE nis = $nis");
    $nominal = mysqli_fetch_assoc($queryNominal);
    $nominal = $nominal['nominal'];

    $query = "UPDATE tb_pembayaran SET
                nip = $nip,
                tgl = '$tgl',
                jumlah_bayar = $nominal
                WHERE idpembayaran = $idpembayaran";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
        die ("Query Gagal Dijalankan : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "  <script>    
                    alert('Pembayaran Berhasil!'); window.location = 'view_history.php';
                </script>";
    }
