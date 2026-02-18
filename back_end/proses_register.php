<?php 
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = 'siswa';

$perintah = mysqli_query($koneksi,
    "INSERT INTO users (nama, username, password, role)
    VALUES ('$nama','$username','$password','$role')"
);

if ($perintah) {
    echo "<script>
        alert('Daftar Berhasil ');
        window.location.href='../index.php';
    </script>";
}else {
    echo "<script>
        alert('Daftar Gagal');
        window.location.href='../register.php';
    </script>";
}

?>