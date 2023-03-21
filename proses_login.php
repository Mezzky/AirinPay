<?php 
session_start();
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$loginpetugas = mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE username = '$username' AND password = '$password'");
$loginsiswa = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis = '$username' AND password = '$password'");

if ($loginpetugas && mysqli_num_rows($loginpetugas) == 1) {
    $row = mysqli_fetch_assoc($loginpetugas);
    $_SESSION['leveluser'] = $row['leveluser'];
    $_SESSION['nip'] = $row['nip'];
    $_SESSION['namapetugas'] = $row['namapetugas'];
    header('Location: home.php');
    exit;
} elseif ($loginsiswa && mysqli_num_rows($loginsiswa) == 1) {
    $row = mysqli_fetch_assoc($loginsiswa);
    $_SESSION['nis'] = $row['nis'];
    $_SESSION['namasiswa'] = $row['namasiswa'];
    header('Location: home_siswa.php');
    exit;
} else {
    echo "<script>
            alert('Username atau Password Salah!');
            window.location = 'index.php';
        </script>";
}
?>