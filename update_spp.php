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
    <title>Update Data SPP</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="form-container">
        <a href="view_spp.php">&larr;</a>

        <div class="form-box">
            <h2>Ubah Data SPP</h2>
            <?php $idspp = $_GET['idspp']; ?>
            <?php $dataSPP = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM tb_spp WHERE idspp = $idspp")) ?>
            <form action="proses_updatespp.php" method="POST">
                <input type="hidden" name="idspp" value="<?php echo $dataSPP['idspp']; ?>">
                <div class="input-box">
                    <label>TAHUN ANGKATAN</label>
                    <input type="text" name="tahun_angkatan" value="<?php echo $dataSPP['tahun_angkatan']; ?>">
                </div>
                <div class="input-box">
                    <label>NOMINAL</label>
                    <input type="text" name="nominal" value="<?php echo $dataSPP['nominal']; ?>">
                </div>
                <button type="submit" class="btn">Ubah</button>
            </form>
        </div>
    </div>
</body>

</html>