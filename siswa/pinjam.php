<?php 
session_start();
include '../back_end/koneksi.php';

$id_user = $_SESSION['id_user'];
$id_buku = $_GET['id'];
$tanggal = date('Y-m-d');
$status = 'dipinjam';

mysqli_query($koneksi,
    "INSERT INTO peminjaman (id_user, id_buku, tanggal_pinjam, status)
    VALUES ('$id_user','$id_buku','$tanggal','$status')"
);

mysqli_query($koneksi,
    "UPDATE buku SET stok = stok - 1 WHERE id_buku='$id_buku'
");

 echo "<script>
        alert('Buku Berhasil Dipinjam ');
        window.location.href='buku.php';
    </script>";

?>