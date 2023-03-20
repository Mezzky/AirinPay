<?php
    include("koneksi.php");
    
    // session_start();
    $id = $_GET['nis'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis = '$id' ");
    while($rows = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Siswa</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="form-container">
        <a href="view_siswa.php">&larr;</a>

        <div class="form-box">
            <h2>Ubah Data Siswa</h2>
            <form action="proses_updatesiswa.php" method="POST">
                <div class="input-box">
                    <label>NIS SISWA</label>
                    <input type="text" readonly name="nis" value="<?php echo $rows['nis'];?>">
                </div>
                <div class="input-box">
                    <label>ANGKATAN</label>
                    <select name="idspp" id="idspp">
                        <?php
                            $queryspp = mysqli_query($koneksi, "SELECT * FROM tb_spp ORDER BY idspp ASC");
                            while ($hasilspp = mysqli_fetch_assoc($queryspp)) {
                            ?>
                        <option value="<?php echo $hasilspp['idspp']; ?>"><?php echo $hasilspp['tahun_angkatan']; ?>
                        </option>
                        <?php
                            }
                            ?>
                    </select>
                </div>
                <div class="input-box">
                    <label>ID KELAS</label>
                    <select name="idkelas" id="">
                        <?php 
                        $idkelas = $rows['idkelas'];
                        $querykelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas WHERE idkelas='$idkelas'");
                        $kelas = mysqli_fetch_assoc($querykelas);
                        ?>
                        <option value="<?php echo $kelas['idkelas'];?>"><?php echo $kelas['namakelas'];?></option>
                    </select>
                </div>
                <div class="input-box">
                    <label>NAMA SISWA</label>
                    <input type="text" name="namasiswa" value="<?php echo $rows['namasiswa'];?>">
                </div>
                <div class="input-box">
                    <label>NO TELP</label>
                    <input type="text" maxlength="12" name="telp" value="<?php echo $rows['telp'];?>">
                </div>
                <div class="input-box">
                    <label>PASSWORD</label>
                    <input readonly type="text" name="password" value="<?php echo $rows['password'];?>">
                </div>
                <button type="submit" class="btn">Ubah</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php
    }
?>