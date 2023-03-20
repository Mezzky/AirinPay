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
    <title>Petugas</title>
    <link rel="stylesheet" href="css/style.php">

</head>

<body>
    <div class="table-container">
        <div class="table-tittle">
            <h1>DATA PETUGAS</h1>
            <div class="tittle-right">
                <?php 
                    $search = isset($_POST['search']) ? mysqli_real_escape_string($koneksi, $_POST['search']) : '';
                ?>
                <form action="">
                    <input type="text" name="cari" placeholder="Cari Data">
                    <button type="submit">Cari</button>
                </form>
                <a href="insert_petugas.php" class="insert-btn">Tambahkan Data +</a>
            </div>
        </div>
        <table cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>NAMA PETUGAS</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>NO TELPON</th>
                    <th>LEVEL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        $query = "SELECT * FROM tb_petugas ORDER BY nip ASC";
                        $result = mysqli_query($koneksi, $query);
        
                        if(!$result){
                            die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                        }
        
                        while($row = mysqli_fetch_assoc($result)){
                        
                    ?>

                <tr>
                    <td><?php echo $row['nip']; ?></td>
                    <td><?php echo $row ['namapetugas']; ?></td>
                    <td><?php echo $row ['username']; ?></td>
                    <td><?php echo $row ['password']; ?></td>
                    <td><?php echo $row ['telp']; ?></td>
                    <td><?php echo $row ['leveluser']; ?></td>
                    <td>
                        <div class="btn">
                            <a href="update_petugas.php?nip=<?php echo $row['nip'];?>">
                                <img class="icon-sm" src="./image/edit-icon.svg" alt="">
                            </a>
                            <a href="delete_petugas.php?nip=<?php echo $row['nip'];?>"
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