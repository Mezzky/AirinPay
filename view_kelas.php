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
    <title>Data Kelas</title>
    <link rel="stylesheet" href="css/style.php">
</head>

<body>
    <div class="table-container">
        <div class="table-tittle">
            <h1>DATA KELAS</h1>
            <div class="tittle-right">
            <form action="" method="POST">
                    <input type="text" name="cari" placeholder="Cari Data Berdasarkan Nama Kelas">
                    <button type="submit">Cari</button>
                </form>
                <a href="insert_kelas.php">Tambahkan Data +</a>
            </div>
        </div>

        <table cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA KELAS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($_POST['cari'])) {
                        $keyword = $_POST['cari'];
                        $query = "SELECT * FROM tb_kelas WHERE namakelas LIKE '%$keyword%' ORDER BY namakelas ASC";
                    } else {
                        $query = "SELECT * FROM tb_kelas ORDER BY namakelas ASC";
                    }
                    $result = mysqli_query($koneksi, $query);

                    if(!$result) {
                        die("Query error : " . mysqli_errno($koneksi) . " - " .  mysqli_error($koneksi));
                    }

                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['namakelas']; ?></td>
                    <td>
                        <div class="btn">
                            <a class="delete-btn" href="delete_kelas.php?idkelas=<?php echo $row['idkelas']; ?>"
                                onclick="return confirm ('Anda yakin menghapus data ini?')">
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