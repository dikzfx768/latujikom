<?php 
session_start();
include 'koneksi.php';

$username= $_POST['username'];
$password= $_POST['password'];

$perintah = mysqli_query($koneksi,
    "SELECT * FROM users WHERE username='$username' AND password='$password'"
);

$data = mysqli_fetch_assoc($perintah);

if ($data) {
    $_SESSION['id_user']= $data['id_user'];
    $_SESSION['nama']= $data['nama'];
    $_SESSION['role']= $data['role'];

if ($data['role'] == 'admin') {
    echo "<script>
        alert('Terdeteksi Login Berhasil(Admin)');
        window.location.href='../admin/dashboard.php';
    </script>";
} else {
    echo "<script>
        alert('Terdeteksi Login Berhasil(Siswa/i)');
        window.location.href='../siswa/dashboard.php';
    </script>";
}
}
else {
    echo "<script>
        alert('LOGIN GAGAL)');
        window.location.href='../index.php';
    </script>";
}
?>