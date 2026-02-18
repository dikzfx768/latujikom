<?php 
session_start();
include '../back_end/koneksi.php';

$judul = $_POST['judul'];
$stok = $_POST['stok'];

mysqli_query($koneksi,
    "INSERT INTO buku (judul, stok)
    VALUES ('$judul','$stok')"
);


 echo "<script>
        alert('Buku Berhasil Ditambahkan ');
        window.location.href='buku.php';
    </script>";

?>