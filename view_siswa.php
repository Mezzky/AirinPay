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
    <title>Siswa</title>
    <link rel="stylesheet" href="css/style.php">
</head>
<body>
    <div class="table-container">
        <div class="table-tittle">
            <h1>DATA SISWA</h1>
            <div class="tittle-right">
                <form action="" method="POST">
                    <input type="text" name="cari" placeholder="Cari Data Berdasarkan Nama Siswa">
                    <button type="submit">Cari</button>
                </form>
                <a href="insert_siswa.php">Tambah Data +</a>
            </div>
        </div>

        <table cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>NAMA SISWA</th>
                    <th>KELAS</th>
                    <th>NO. TELPON</th>
                    <th>PASSWORD</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                if (isset($_POST['cari'])) {
                    $keyword = $_POST['cari'];
                    $query = "SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(idkelas) WHERE namasiswa LIKE '%$keyword%'"; 
                } else {
                    $query = "SELECT * FROM tb_siswa INNER JOIN tb_kelas USING(idkelas)"; 
                }
                $result = mysqli_query($koneksi, $query);

                if (!$result){
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }

                $no = 1;
                while($row = mysqli_fetch_assoc($result)){
                ?>

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nis']; ?></td>
                    <td><?php echo $row['namasiswa']; ?></td>
                    <td><?php echo $row['namakelas']; ?></td>
                    <td><?php echo $row['telp']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <div class="btn">
                            <a href="update_siswa.php?nis=<?php echo $row['nis'];?>">
                                <img class="icon-sm" src="./image/edit-icon.svg" alt="">
                            </a>
                            <a href="delete_siswa.php?nis=<?php echo $row['nis'];?>" onClick = "return confirm('Anda yakin menghapus data ini?')">
                                <img class="icon-sm" src="./image/hapus-icon.svg" alt="">
                            </a>
                        </div>
                    </td>
                </tr>

                <?php
                $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>