<?php

    include("koneksi.php");
    
    session_start();

    $id = $_GET['nip'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE nip = '$id' ");
    while($rows = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Petugas</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="form-container">
        <a href="view_petugas.php">&larr;</a>

        <div class="form-box">

            <h2>Ubah Data Petugas</h2>
            <form action="proses_updatepetugas.php" method="POST" class="main-form">
                <input type="text" name="nip" hidden value="<?php echo $rows['nip'];?>" class="input-text">
                <div class="input-box">
                    <label>NAMA PETUGAS</label>
                    <input type="text" name="namapetugas" value="<?php echo $rows['namapetugas'];?>" class="input-text">
                </div>
                <div class="input-box">
                    <label>NO TELP</label>
                    <input type="text" maxlength="12" name="telp" value="<?php echo $rows['telp'];?>" class="input-text">
                </div>
                <div class="input-box">
                    <label>USERNAME</label>
                    <input type="text" name="username" value="<?php echo $rows['username'];?>" class="input-text">
                </div>
                <div class="input-box">
                    <label>PASSWORD</label>
                    <input type="text" name="password" value="<?php echo $rows['password'];?>" class="input-text">
                </div>
                <div class="input-box">
                    <label>LEVELUSER</label>
                    <select name="leveluser" id="">
                        <option value="<?php echo $rows['leveluser']; ?>"><?php echo $rows['leveluser']; ?></option>
                        <option value="Admin">Admin</option>
                        <option value="Pegawai">Pegawai</option>
                    </select>
                </div>
                <button type="submit" class="btn">Ubah</button>
        </div>
    </div>
</body>

</html>
<?php
    }
?>