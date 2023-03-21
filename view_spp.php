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
    <title>SPP</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="table-container">
        <div class="table-tittle">
            <h1>DATA SPP</h1>
            <div class="tittle-right">
                <form action="" method="POST">
                    <input type="text" name="cari" placeholder="Cari Data Berdasarkan Tahun Angkatan">
                    <button type="submit">Cari</button>
                </form>
                <a href="insert_spp.php">Tambah Data +</a>
            </div>
        </div>

        <table cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN ANGKATAN</th>
                    <th>NOMINAL</th>
                    <th>AKSI</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    if (isset($_POST['cari'])) {
                        $keyword = $_POST['cari'];
                        $query = "SELECT * FROM tb_spp WHERE tahun_angkatan LIKE '%$keyword%' ORDER BY idspp ASC";
                    } else {
                        $query = "SELECT * FROM tb_spp ORDER BY idspp ASC";
                    }
                    $result = mysqli_query($koneksi, $query);
    
                    if(!$result) {
                        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                    }
                    
                    $i = 1;
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?php echo $row['tahun_angkatan']; ?></td>
                    <td><?php echo $row['nominal']; ?></td>
                    <td>
                        <div class="btn">
                            <a href="update_spp.php?idspp=<?php echo $row['idspp'];?>">
                                <img class="icon-sm" src="./image/edit-icon.svg" alt="">
                            </a>
                            <a href="delete_spp.php?idspp=<?php echo $row['idspp'];?>"
                                onClick="return confirm('Anda yakin menghapus data ini?')">
                                <img class="icon-sm" src="./image/hapus-icon.svg" alt="">
                            </a>
                        </div>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        
    </div>
</body>

</html>