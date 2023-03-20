<?php 

session_start();

include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$loginpetugas = mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE username = '$username' AND password = '$password'");

$loginsiswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis = '$username' AND password = '$password'");

if($loginpetugas && mysqli_num_rows($loginpetugas) == 1) {
    $row = mysqli_fetch_assoc($loginpetugas);
    $_SESSION['leveluser'] = $row['leveluser'];
    $_SESSION['nip'] = $row['nip'];
    $_SESSION['namapetugas'] = $row['namapetugas'];
    
    if($_SESSION['leveluser'] == 'Admin' ){
        header('Location: home.php');
    } else if ($_SESSION['leveluser'] == 'Pegawai'){
        header('Location: home.php');
    } 
} elseif($loginsiswa && mysqli_num_rows($loginsiswa) == 1) {
    $rows = mysqli_fetch_assoc($loginsiswa);
    $_SESSION['nis'] = $rows['nis'];
    $_SESSION['namasiswa'] = $rows['namasiswa'];
    if($_SESSION['nis'] == $username ){
        header('Location: home_siswa.php');
    }
} else {
    echo "Username atau Password Salah";
}
?>