<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/style.php">
</head>

<body>

    <header>
        <h1>Pembayaran SPP</h1>
        <nav>
            <?php if(@($_SESSION['leveluser'])) { ?>
            <?php if ($_SESSION['leveluser'] == "Admin") { ?>
            <a href="home.php">
                <span>Home</span>
            </a>
            <a href="view_siswa.php">
                <span>Data Siswa</span>
            </a>
            <a href="view_kelas.php">
                <span>Data Kelas</span>
            </a>
            <a href="view_spp.php">
                <span>Data SPP</span>
            </a>
            <a href="view_petugas.php">
                <span>Data Petugas</span>
            </a>
            <a href="view_pembayaran.php">
                <span>Pembayaran</span>
            </a>
            <a href="view_history.php">
                <span>Histori</span>
            </a>
            <a href="logout.php">
                <span>Logout</span>
            </a>

            <?php } elseif ($_SESSION['leveluser'] == "Pegawai") { ?>
            <a href="home.php">
                <span>Home</span>
            </a>
            <a href="view_pembayaran.php">
                <span>Pembayaran</span>
            </a>
            <a href="view_history.php">
                <span>Histori</span>
            </a>
            <a href="logout.php">
                <span>Logout</span>
            </a>
            <?php } ?>
            <?php } elseif (isset($_SESSION['nis'])) { ?>
            <a href="home_siswa.php">
                <span>Home</span>
            </a>
            <a href="view_history_siswa.php">
                <span>Histori</span>
            </a>
            <a href="logout.php">
                <span>Logout</span>
            </a>
            <?php } ?>
                
        </nav>
    </header>

</body>

</html>